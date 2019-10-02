<?php
abstract class Cliente{
  Private $email;
  Private $pass;
  Private $cuenta;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($email,$pass,Cuenta $cuenta){
    $this->email = $email;
    $this->pass = $pass;
    switch ($cuenta) {
      case 'classic':
        $this->cuenta = new Classic ($cbu);
        break;
      case 'gold':
        $this->cuenta = new Gold ($cbu);
        break;
      case 'platinum':
        $this->cuenta = new Platinum ($cbu);
        break;
      case 'black':
        $this->cuenta = new Black ($cbu);
        break;
      default:
        // code...
        break;
    }

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


class Persona extends Cliente
{
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;

  public function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
    parent::__construct($email,$pass);
  }
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

  public function cobrarServicios(){
    $intereses= strlen($this->apellido)*10;
    parent::cobrarServicios($intereses);
  }
}

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

class Multinacional extends Cliente
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
}

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

class Black extends cuenta{

  }
  public function acreditar ($monto,$fechamov){
    $interes=$monto>=1000000?0:4;
    $monto-=$monto*$interes/100;
    $this->setBalance($this->getBalance()-$monto);
  }
}



 ?>
