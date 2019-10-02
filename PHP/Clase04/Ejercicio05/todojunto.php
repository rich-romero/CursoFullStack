<?php
$funcionesEjecutadas=0;

include_once 'funciones/funciones.php';
include_once 'funciones/superficie.php';

echo "La superficie del circulo 1 es: ".circulo(10)."<br>";
    /////// EJERCICIO ///////
    echo "Funciones ejecutadas: ".$funcionesEjecutadas;

echo "La superficie del circulo 2 es: ".circulo(12)."<br>";
    /////// EJERCICIO ///////
    echo "Funciones ejecutadas: ".$funcionesEjecutadas;

echo "La superficie del circulo 3 es: ".circulo(9)."<br>";
    /////// EJERCICIO ///////
    echo "Funciones ejecutadas: ".$funcionesEjecutadas;

echo "El circulo con mayor la superficie mide: ".mayor(circulo(10),circulo(12),circulo(9));
    /////// EJERCICIO ///////
    echo "Funciones ejecutadas: ".$funcionesEjecutadas;


?>
