<?php
  /////// EJERCICIO 01 ///////
  class usuario
  {
    public $nombre;
    public $email;
    public $contrasenia;

    public function __construct($nombrePersona,$emailPersona,$contraseniaPersona)
    {
      $this->nombre=$nombrePersona;
      $this->email=$emailPersona;
      $this->contrasenia=$contraseniaPersona;
    }

  }
 ?>