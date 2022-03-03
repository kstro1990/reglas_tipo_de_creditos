<?php
$ntypes = 6;
$ncredits = 32;
$data = $_POST;


$tcreditos= array(1=>"C",2=>"D",3=>"M",4=>"P",5=>"X",6=>"L");
$cmin= array(1=>$_POST['MC'],2=>$_POST['MD'],3=>$_POST['MM'],4=>$_POST['MP'],5=>$_POST['MX'],6=>$_POST['DPF']);

for ($k = 1; $k <= $ntypes; $k++) {

	//recorrer para cada tipo  n creditos (32)
	for ($i = 1; $i <= $ncredits; $i++) {
		$final[$tcreditos[$k]][$i]=array("remove"=>true);
		//compara credito i vs 32 tipos de credito

	}
}

//recorrer los tipos de creditos (5)
for ($k = 1; $k <= $ntypes; $k++) {

	//recorrer para cada tipo  n creditos (32)
	for ($i = 1; $i <= $ncredits; $i++) {
		//compara credito i vs 32 tipos de credito
		for ($j = 1; $j <= $ncredits; $j++) {

			if($data[$tcreditos[$k]][($i-1)] == $j){
				$final[$tcreditos[$k]][$j]=array("minimum"=>$cmin[$k]);

			}

		}

	}
}
echo " ".trim(json_encode($final));
/*
$key =2;
$data = array($key => array("minimum"=>10));

//echo json_encode ($data);
*/
