<?php
include('usuario.php');
$us1=new Usuario("pepe","pepe@gmail.com","123123");
$us2=new Usuario("pepita","pepita@gmail.com","456456");
var_dump($us1);
var_dump($us2);
echo "<br><br>";
//echo $us1->nombre." -> ".$us1->email." -> ".$us1->contrasenia."<br>";
//echo $us2->nombre." -> ".$us2->email." -> ".$us2->contrasenia."<br>";

echo $us1->saludar();
echo $us2->saludar();
echo "<br><br>";

echo $us1->getPass()."<br>";
$us1->setPass(colacola);
echo $us1->getPass()."<br>";


echo "<br><br>";
var_dump($us1);
 ?>
