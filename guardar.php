<?php

if(isset($_POST)){
	require_once("collectorClima.php"); 
	require_once("collectorCiudad.php"); 
$objColl= new ClimaCollector();
$ciuColl= new CiudadCollector();
    
   $hora=$_POST["hora"];
   $dia=$_POST["dia"];
   $mes=$_POST["mes"];
   $temperatura=$_POST["temperatura"];
   $ciudad=$_POST["ciudad"];
   $ciudad_id_ciudad=$ciuColl->insertCiudad($descripcion);

  $objColl->insertClima($hora,$dia,$mes,$temperatura, $ciudad_id_ciudad);
header("location: index.php");
}  
    
 ?>