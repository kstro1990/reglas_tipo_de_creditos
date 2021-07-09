<?php

$data = file_get_contents('php://input');
//echo $data;

$url = 'https://www.almacenesunidos.cr/Plugins/PaymentP2P/IPNHandler';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8'));
$result = curl_exec($ch);
$respuestaJson = json_decode($result);

echo $respuestaJson;

 ?>
