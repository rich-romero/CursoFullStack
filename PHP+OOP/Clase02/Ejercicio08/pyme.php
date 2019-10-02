<?php
  include_once 'cliente.php';
  class Pyme extends Cliente
  {
    Private $cuit;
    Private $razonSocial;
    Private $rubro;

    public function __construct($cuit,$razonSocial,$rubro,$email,$pass)
    {
      $this->cuit = $cuit;
      $this->razonSocial = $razonSocial;
      $this->rubro = $rubro;
      parent::__construct($email,$pass)
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
    public function cobrarServicios(){
      $intereses= strlen($this->razonSocial)*5;
      parent::cobrarServicios($intereses);
  }
