<?php
  echo "Hola mundo\n";

$nombre=readline("Por favor, ingrese su nombre\n");
  echo "Bienvenido $nombre\n";
$edad=readline("Por favor, ingrese su edad\n");
  if ($edad<18) {
    echo "Usted no esta autorizado a usar el sistema\n";
    exit;
  }
  else {
    echo "Autorizacion exitosa\n";
  }
function hobbyValido($hobby)
  {
  return(strlen($hobby)>15 || strlen($hobby)<3);
  }
$hobbies=readline("Por favor ingrese sus hobbies separados por coma y sin espacios\n");

/*
USAR EXPLODE
USAR IMPLODE

*/
