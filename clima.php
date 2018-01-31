<?php
/**
* 
*/
class Clima {

private $id_clima;
private $hora;
private $dia;
private $mes;
private $temperatura;
private $ciudad_id_ciudad;


public function __construct(){
   

}
public function setId($id){
     $this->id_clima=$id;
}
public function getId(){
	return $this->id_clima;
}
public function setHora($var){
     $this->hora=$var;
}
public function getHora(){
	return $this->hora;
}
public function setDia($var){
     $this->dia=$var;
}
public function getDia(){
	return $this->dia;
}

public function setMes($var){
     $this->mes=$var;
}
public function getMes(){
	return $this->mes;
}
public function setTemperatura($var){
     $this->temperatura=$var;
}
public function getTemperatura(){
	return $this->temperatura;
}

public function setCiudad($var){
     $this->ciudad_id_ciudad=$var;
}
public function getCiudad(){
	return $this->ciudad_id_ciudad;
}


}

?>