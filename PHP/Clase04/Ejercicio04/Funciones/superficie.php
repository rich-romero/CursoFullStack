<?php
  /////// EJERCICIO A ///////
  function triangulo($base,$altura) {
    $superficieTriangulo=($base*$altura)/2;
    return $superficieTriangulo;
  }
  /* echo "La superficie del triangulo es: ".triangulo(10,5)."<br>"; */

  /////// EJERCICIO B ///////
  function rectangulo($base,$altura) {
    $superficieRectangulo=($base*$altura);
    return $superficieRectangulo;
  }
  /* echo "La superficie del rectangulo es: ".rectangulo(10,5)."<br>"; */

  /////// EJERCICIO C ///////
  function cuadrado($base) {
    $superficieCuadrado=($base*$base);
    return $superficieCuadrado;
  }
  /* echo "La superficie del cuadrado es: ".cuadrado(10)."<br>"; */

  /////// EJERCICIO D ///////
  function circulo($radio) {
    $superficieCirculo=($radio*$radio)*pi();
    return $superficieCirculo;
  }
  /* echo "La superficie del circulo es: ".circulo(10)."<br>"; */
