<?php
$animales=["Perro","Gato","Pez","Delfin","Unicornio"];


$animales[]="Araña";
$animales[]="Narval";

var_dump ($animales);

echo nl2br("\n Me gustan los animales $animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5] y $animales[6]");

$animales[0]="Zorro";

echo nl2br("\n Me gustan los animales $animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5] y $animales[6]");

$animales[100]="Foca";

echo nl2br("\n Me gustan los animales $animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6] y $animales[100]");

$animales[16]="ardilla";

echo nl2br("\n Me gustan los animales $animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6] y $animales[100]");
