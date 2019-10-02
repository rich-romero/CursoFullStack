<?php
include_once 'cuenta.php';

class Classic extends cuenta{
  public function debitar ($monto,$origen,$fechamov){
    switch ($origen) {
      case 'banelco':
      $interes=5;
      break;

      case 'link':
      $interes=10;
      break;

      case 'caja':
      $interes=10;
      break;

      default:
        return "debe indicar opcion valida"
        break;
    }
    $monto+=$monto*$interes/100;
    $this->setBalance($this->getBalance()-$monto);
    $this->ultmov=date("d/m/Y");
  }
  public function acreditar ($monto,$fechamov){
    $monto-=$monto*5/100;
    parent::acreditar($montoint);
  }
}
