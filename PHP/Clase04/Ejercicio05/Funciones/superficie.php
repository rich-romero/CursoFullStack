<?php
  function triangulo($base,$altura) {
    /////// EJERCICIO ///////
    $funcionesEjecutadas++;

    $superficieTriangulo=($base*$altura)/2;
    return $superficieTriangulo;
  }

  function rectangulo($base,$altura) {
    /////// EJERCICIO ///////
    $funcionesEjecutadas++;

    $superficieRectangulo=($base*$altura);
    return $superficieRectangulo;
  }

  function cuadrado($base) {
    /////// EJERCICIO ///////
    $funcionesEjecutadas++;

    $superficieCuadrado=($base*$base);
    return $superficieCuadrado;
  }

  function circulo($radio) {
    /////// EJERCICIO ///////
    $funcionesEjecutadas++;

    $superficieCirculo=($radio*$radio)*pi();
    return $superficieCirculo;
  }
