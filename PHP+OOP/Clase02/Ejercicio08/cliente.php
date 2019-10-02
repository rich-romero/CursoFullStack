<?php

//Defino variables privadas para la clase Cliente

abstract class Cliente{
  Private $email;
  Private $pass;
  Private $cuenta;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($email,$pass,Cuenta $cuenta){
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }
  public function setCuenta($cuenta){
    $this->cuenta = $cuenta;
  }
  public function getCuenta(){
    return $this->cuenta;
  }

  public function cobrarServicios($interes=0){
    if ($this->cuenta instanceOf Classic){
      $monto=100;
    }
    elseif ($this->cuenta instanceOf Gold) {
      $monto=$interes;
    }
    elseif ($this->cuenta instanceOf Platinum) {
      $monto=$this->cuenta->getBalance()*10/100;
    }
    elseif ($this->cuenta instanceOf Black) {
      $date=date("N",strtotime($this->cuenta->getUltmov()))
      $monto=500+($date+1)*100;
    }
    $this->cuenta->setBalance($this->cuenta->getBalance()-$monto)
  }
}
