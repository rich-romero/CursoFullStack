<?php

//Defino variables privadas para la clase Cliente

abstract class Cuenta{
  Private $cbu;
  Private $balance;
  Private $ultmov;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($cbu,$balance,$ultmov){
    $this->cbu = $cbu;
    $this->balance = $balance;
    $this->ultmov = $ultmov;
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
  public function setUltmov($ultmov){
    $this->fechaultmov = $ultmov;
  }
  public function getUltmov(){
    return $this->ultmov;
  }

  abstract public function debitar($monto,$origen);

  public function acreditar($monto)
  {
    $this->balance += $monto;
    $this->ultmov = $origen;
    setUltmov(date("d/m/Y");
    return $origen;
  }
  //setUltmov(date("F j,Y,g:i a"));


}
