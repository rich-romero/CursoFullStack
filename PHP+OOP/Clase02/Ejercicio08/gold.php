<?php

include_once 'cuenta.php';
//Defino variables privadas para la clase Cliente

class Gold extends cuenta{
  public function debitar ($monto,$origen,$fechamov){
    $interes=$origen=='link'?5:0;
    $monto+=$monto*$interes/100;
    $this->setBalance($this->getBalance()-$monto);
    $this->ultmov=date("d/m/Y");
  }
  public function acreditar ($monto){
    $interes=$monto>=25000?0:3;
    $monto-=$monto*$interes/100;
    parent::acreditar($monto);
  }
}
