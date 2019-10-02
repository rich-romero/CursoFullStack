<?php

include_once 'cuenta.php';
//Defino variables privadas para la clase Cliente

class Platinum extends Cuenta{
  public function debitar ($monto,$origen,$fechamov){
    $interes=$this->getBalance()>=5000;
    $this->ultmov=date("d/m/Y");

    $monto+=$monto*$interes/100;
    $this->setBalance($this->getBalance()-$monto);

    if      (parent::$balance=>5000) {
      $montoint=$monto;
      parent::acreditar($montoint);
      setFechaulmov(date("F j,Y,g:i a"));
    } else {
      $montoint=$monto+$monto*5/100;
      parent::acreditar($montoint);
      setFechaulmov(date("F j,Y,g:i a"));
    }
  }
  public function acreditar ($monto,$fechamov){
      $montoint=$monto;
      parent::acreditar($montoint);
  }
}
