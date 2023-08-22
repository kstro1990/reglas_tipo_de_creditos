<?php

/**
 * lista de tipo de credito en Datafast
 *Luis Castro
 *26/12/2022
 */
class Filtro_tipo_Credito
{
  function filtobcr($datos){
    $installments = new stdClass();
    $include = []; 
      foreach ($datos as $clave => $valor) {
            $installments=[];
            // valos de los $installments(cantidad de meses)
            $installments = explode(",", $valor);
            //valida si el $installments esta vacio
            if ($installments[0]=="") {
              $installments=[];
            }
    }
    $include= [
              'include'=> [
              'region'=>["on_us"],
              'code'=> "BCR",
              'type'=> "0",
              'groupCode'=>"B",
              'installments'=>$installments
              ]
            ]; 
    return $include;
  }
}
  
header('Content-Type: text/html; charset=utf-8');

$new = new Filtro_tipo_Credito();
$resultado = $new->filtobcr($_POST);
$denco= json_encode($resultado);
echo $denco;