<?php
/////// EJERCICIO 1 - A ///////

function textchecker(){
  $mode=file_exists('texto.txt')? "a+":"w+";
  $archivo=fopen('texto.txt',$mode);

  /////// EJERCICIO 1 - B ///////
  for ($i=1; $i <=100 ; $i++) {
    fwrite($archivo,"Hola Mundo! Testing $i\n");
  }
  fclose($archivo);
}
//    textchecker();

/////// EJERCICIO 1 - C ///////

function textreader()
{
  $archivo=fopen('texto.txt',"r");
  $tamanio=filesize('texto.txt');
  echo fread($archivo,$tamanio);
}
textreader();

function textreader()
{
  $archivo=fopen('texto.txt',"r");
  $tamanio=filesize('texto.txt');
  //echo fread($archivo,$tamanio)
  if ($archivo) {
    while (($a = fgets($archivo))!==false) {
      echo nl2br($a."\n");
    }
  }
  fclose($archivo);
}
textreader();



//unlink('texto.txt');

$archivo=fopen('texto2.txt',"w+");
fwrite($archivo,'Hola nuevamente mundo!');

$archivo=fopen('texto2.txt',"a+");
fwrite($archivo,"\n¿Este texto pisa el anterior?");

$archivo=fopen('texto2.txt',"a+");
fwrite($archivo,"\nYa no mas codigo por hoy!!!!!");




/////// AYUDAS //////

//    https://www.php.net/manual/es/function.fopen.php     //
?>
