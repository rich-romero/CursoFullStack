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
  }
 ?>
