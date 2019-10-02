<?php
$texto="Me encanta php, a mi también me encanta php!";
echo $texto."<br>"."<br>";

$palabra="php";
$primeraPos=strpos($texto,$palabra);
echo "La primera aparicion de \"php\" es en el valor :".$primeraPos."<br>";

$segundaPos=strpos($texto,$palabra,($primeraPos+1));
echo "La segunda aparicion de \"php\" es en el valor :".$segundaPos."<br>";

/////// AYUDAS //////

//    https://www.php.net/manual/es/function.strpos.php     //

?>
