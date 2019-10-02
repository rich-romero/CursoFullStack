<?php
  /////// EJERCICIO 01 ///////
  class usuario
  {
    private $nombre;
    private $email;
    private $contrasenia;

    public function __construct(string $nombrePersona,string $emailPersona,$contraseniaPersona)
    {
      $this->nombre=$nombrePersona;

      //////////  EMAIL  /////////
      if (filter_var($email=FILTER_VALIDATE_EMAIL)) {
        $this->email=$email;}
      else {
        return $errorMailInvalido=true;}

      //////////  CONTRASEÑA  /////////
      if (strlen($contraseniaPersona)>=3) {
        $this->contrasenia=$contraseniaPersona;}
      else {
        return $errorContraseniaCorta=true;}

    }

    public function saludar()
    {
      echo "Hola ".$this->nombre.".<br>";
    }

    ///////  EJERCICIO 11  ///////
    public function getNombre(string $nombre)
    {
      return $this->nombre;
    }

    public function getMail(string $email)
    {
      return $this->email;
    }

    public function getPass($contrasenia)
    {
      return $this->contrasenia;
    }

    public function setNombre(string $nombre)
    {
      $this->nombre=$nombre;
    }

    public function setMail(string $email)
    {
      if (filter_var($email=FILTER_VALIDATE_EMAIL)) {
        $this->email=$email;
      }
      else {
        return $errorMailInvalido=true;
      }
    }

    public function setPass($contrasenia)
    {
      if (strlen($contrasenia)>=3) {
        encriptarPass();
        $this->contrasenia=$contrasenia;
      }
      else {
        return $errorContraseniaCorta=true;
      }
    }

    private function encriptarPass()
    {
      $this->contrasenia=md5($contrasenia);
    }

  }
 ?>
