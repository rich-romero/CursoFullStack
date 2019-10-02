<?php

$contador=0;

  do {
    $a=rand(0,1);
    $contador++;
  } while (!$a);

echo $contador;
