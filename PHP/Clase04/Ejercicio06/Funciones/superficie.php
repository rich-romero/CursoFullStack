<?php
  function triangulo($base,$altura) {
    /////// EJERCICIO ///////
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;

    $superficieTriangulo=($base*$altura)/2;
    return $superficieTriangulo;
  }

  function rectangulo($base,$altura) {
    /////// EJERCICIO ///////
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;

    $superficieRectangulo=($base*$altura);
    return $superficieRectangulo;
  }

  function cuadrado($base) {
    /////// EJERCICIO ///////
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;

    $superficieCuadrado=($base*$base);
    return $superficieCuadrado;
  }

  function circulo($radio) {
    /////// EJERCICIO ///////
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;

    $superficieCirculo=($radio*$radio)*pi();
    return $superficieCirculo;
  }
