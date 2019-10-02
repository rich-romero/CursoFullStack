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

    public function setNombre($nombre)
    {
      $this->nombre=$nombre;
    }

    public function setMail($email)
    {
      $this->email=$email;
    }

    public function setPass($contrasenia)
    {
        $this->contrasenia=$contrasenia;
    }
  }
 ?>
