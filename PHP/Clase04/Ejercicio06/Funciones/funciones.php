<?php
  $numeroMagico=33;

  function mayor($a,$b,$c=null) {
    /////// EJERCICIO ///////
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;

    if ($c==null) {
      global $numeroMagico;
      $c=$numeroMagico;
    }
    $valores=[$a,$b,$c];
    $mayor=$a;
    foreach ($valores as $valor) {
      if ($mayor<$valor) {
      $mayor=$valor;
      }
    }
    return $mayor;
  }

function tabla ($base,$limite=null){
  /////// EJERCICIO ///////
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;

  if ($limite==null) {
    global $numeroMagico;
    $limite=$numeroMagico;
  }
  $valores=[];
  for ($i=$base; $i<=$limite ; $i++) {
    $valores[]=$i;
    echo $i."<br>";
  }
}
