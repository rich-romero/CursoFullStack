<?php
  /////// EJERCICIO 01 ///////
  class usuario
  {
    private $nombre;
    private $email;
    private $contrasenia;

    public function __construct($nombrePersona,$emailPersona,$contraseniaPersona)
    {
      $this->nombre=$nombrePersona;
      $this->email=$emailPersona;
      $this->contrasenia=$contraseniaPersona;
    }

    public function saludar()
    {
      echo "Hola ".$this->nombre.".<br>";
    }

    ///////  EJERCICIO 11  ///////
    public function getNombre($nombre)
    {
      return $this->nombre;
    }

    public function getMail($email)
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
        echo "Formato de correo no valido";
      }
    }

    public function setPass($contrasenia)
    {
      $long=strlen($contrasenia)
      if ($long>=3) {
        $this->contrasenia=$contrasenia;
      }
      else {
        return $errorContraseniaCorta=true;
      }
    }
  }
 ?>
