<?php
require_once("collectorClima.php");
$obcli= new ClimaCollector();

foreach ($obcli->showClimas() as $clima) {
	echo $clima->getHora();
	echo $clima->getDia();
	echo $clima->getMes();
	echo $clima->getTemperatura();

	
}
?>