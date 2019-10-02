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
      $this->email=$email;
    }

    public function setPass($contrasenia)
    {
      ///////  EJERCICIO 11  ///////

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
