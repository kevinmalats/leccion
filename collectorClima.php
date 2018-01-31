<?php

include_once('clima.php');
include_once('database/collector.php');

class ClimaCollector extends Collector
{
  
  function showClimas() {
    $rows = self::$db->getRows("SELECT * FROM clima ");        
    $arrayTelefono= array();        
    foreach ($rows as $c){
      $aux = new Clima();
      $aux->setId($c{'id_clima'});
      $aux->setHora($c{'hora'});
        $aux->setDia($c{'dia'});
      $aux->setMes($c{'mes'});
      $aux->setTemperatura($c{'temperatura'});
      $aux->setCiudad($c{'ciudad_id_ciudad'});
      array_push($arrayTelefono, $aux);
    }
    return $arrayTelefono;        
  }
  

function showClima($id) {
    $rows = self::$db->getRows("SELECT * FROM clima where id_clima= ? ", array ("{$id}"));        
$aux = new Clima();
$aux->setId($c{'id_clima'});
$aux->setHora($c{'hora'});
$aux->setDia($c{'dia'});
$aux->setMes($c{'mes'});
$aux->setTemperatura($c{'temperatura'});
$aux->setCiudad($c{'ciudad_id_ciudad'});
    return $aux;        
  }

/*
function updateTelefono($id_telefono,$descripcion, $informacion_usuario_id_usuario) {
    $insertrow = self::$db->updateRow("UPDATE public.telefono SET descripcion = ? , informacion_usuario_id_usuario = ? where id_telefono= ? ", array ("{$descripcion}","{$informacion_usuario_id_usuario}",$id_telefono));

}
function deleteTelefono($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.telefono where id_telefono= ? ", array ("{$id}"));

}*/
function insertClima($hora, $dia, $mes, $temperatura, $ciudad_id_ciudad) {
    
    $rows = self::$db->insertRow("INSERT INTO public.clima(hora, dia,mes,temperatura, ciudad_id_ciudad) VALUES (?, ?, ?, ?, ?) returning id_clima", array ("{$hora}","{$dia}","{$mes}","{$temperatura}","{$ciudad_id_ciudad}"));  

   return  $rows{"id_clima"};         
  }

//funciones para combobox de denunciantes y autoridades


}
?>
