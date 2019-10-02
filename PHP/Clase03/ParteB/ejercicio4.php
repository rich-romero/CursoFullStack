<?php

$nombres=["Richard","Fran","Dai","Ema","Laza"];

/*
for ($i=0; $i<5 ; $i++) {
  echo nl2br ($nombres[$i]."\n") ;
}
// WARNING:BIEN

$i=0;
while ($i <= 5) {
  echo nl2br ($nombres[$i]."\n");
  $i++;
}
// WARNING:BIEN


$i=0;
do {
  echo nl2br ($nombres[$i]."\n");
  $i++;
} while ($i <= 5);

// WARNING:BIEN
*/

foreach ($nombres as $key) {
echo nl2br ($key."\n");
}
// WARNING:BIEN
