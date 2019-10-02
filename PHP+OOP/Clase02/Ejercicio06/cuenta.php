<?php

//Defino variables privadas para la clase Cliente

abstract class cuenta{
  Private $cbu;
  Private $balance;
  Private $fechaultmov;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($cbu,$balance,$fechaultmov){
    $this->cbu = $cbu;
    $this->balance = $balance;
    $this->fechaultmov = $fechaultmov;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado

  public function setCbu($cbu){
    $this->nombre = $cbu;
  }
  public function getCbu(){
    return $this->cbu;
  }
  public function setBalance($balance){
    $this->balance = $balance;
  }
  public function getBalance(){
    return $this->balance;
  }
  public function setFechaulmov($fechaultmov){
    $this->fechaultmov = $fechaultmov;
  }
  public function getFechaulmov(){
    return $this->fechaultmov;
  }

  abstract public function debitar($Monto,$origen,$fechamov)
  {
    $this->balance = ($this->$balance-$Monto);
    $this->origen = $origen;
    setFechaulmov($fechamov);
    return $origen;
  }

  public function acreditar($Monto,$origen,$fechamov)
  {
    $this->balance = ($this->$balance+$Monto);
    $this->origen = $origen;
    setFechaulmov($fechamov);
    return $origen;
  }


}
