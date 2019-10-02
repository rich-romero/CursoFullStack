<?php
include_once 'cliente.php';

  class Multinacional extends Cliente
  {
    Private $cuit;
    Private $razonSocial;
    Private $rubro;

    public function __construct($cuit,$razonSocial,$rubro)
    {
      $this->cuit = $cuit;
      $this->razonSocial = $razonSocial;
      $this->rubro = $rubro;
    }

    public function setCuit(integer $cuit){
      $this->cuit = $cuit;
    }
    public function getCuit(){
      return $this->cuit;
    }
    public function setRazonSocial(string $razonSocial){
      $this->razonSocial = $razonSocial;
    }
    public function getRazonSocial(){
      return $this->razonSocial;
    }
    public function setRubro(string $rubro){
      $this->rubro = $rubro;
    }
    public function getRubro(){
      return $this->rubro;
    }
  }
