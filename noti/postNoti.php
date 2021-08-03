<?php

//$data = file_get_contents('php://input');
$data = '{"status":{"status":"APPROVED","message":"Testing notification","reason":"TT","date":"2021-07-12T11:52:42-05:00"},"requestId":"123","reference":"123","signature":"f186ae2c7b9f84545ad4d9160acc3701ad64e88f"}';

$file = fopen("Notificacion_URL_".date("Y-m-d").".txt","a");

fwrite($file, "...........------------......................------------...........".PHP_EOL);
try {
    $url = 'https://blog.smartfit.com.co/wp-json/placetopay-payment/v2/callback/';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8'));

    if(curl_exec($ch) === false)
    {
        echo 'Curl error: ' . curl_error($ch);
        fwrite($file, 'Curl error: ' . curl_error($ch) .PHP_EOL);

    }
    else
    {
        echo 'Operación completada sin errores';
        $result = curl_exec($ch);
        echo $result;
        fwrite($file, $result .PHP_EOL);
    }
} catch (\Exception $e) {
    echo "ERROR : " .$e;
    fwrite($file, "ERROR : " .$e .PHP_EOL);
}
fclose($file);

 ?>
