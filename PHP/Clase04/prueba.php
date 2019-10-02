<?php

  function mayor(int $a,int $b,int $c)
  {
    $numeros=[$a,$b,$c];
    $mayor=null;
    foreach ($numeros as $value) {
      if ($value>$mayor) {
      $mayor=$value;
      }
    }
    return $mayor;
  }
 echo "El mayor es: ".mayor(3,12,9);
