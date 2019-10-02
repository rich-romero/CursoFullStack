<?php

include_once 'cuenta.php';
//Defino variables privadas para la clase Cliente

class Black extends cuenta{
  
  }
  public function acreditar ($monto,$fechamov){
    $interes=$monto>=1000000?0:4;
    $monto-=$monto*$interes/100;
    $this->setBalance($this->getBalance()-$monto);
  }
}
