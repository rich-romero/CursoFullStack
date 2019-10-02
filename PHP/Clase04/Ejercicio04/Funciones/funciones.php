<?php
/////// EJERCICIO C ///////
  $numeroMagico=33;

/////// EJERCICIO A ///////
  function mayor($a,$b,$c=null) {
/////// EJERCICIO D ///////
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

/* echo "El mayor es: ".mayor(3,12); */

/////// EJERCICIO B ///////
function tabla ($base,$limite=null){
/////// EJERCICIO E ///////
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
/* echo "El mayor es: ".mayor(3,12); */
