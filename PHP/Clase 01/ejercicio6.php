<?php

  $entero=20;
  $decimal=2.5;

echo nl2br ($entero+$decimal."(A)\n");

echo nl2br ($entero-$decimal."(B)\n");

echo nl2br ($entero/$decimal."(C)\n");

echo nl2br ($entero*$decimal."(D)\n");

  $resdiv=$entero/$decimal;

echo nl2br ($resdiv."(E)\n");

echo nl2br ("(F) ".($entero+$decimal+1)."\n");

echo nl2br ("(G) ".(5+$entero)."\n---- ".($decimal+0.6)."\n");

$resultado=(($entero*2+$decimal)/($entero/2));

echo nl2br ("(H) ".$resultado."\n");
