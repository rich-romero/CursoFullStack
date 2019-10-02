<?php

$n=[rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];

/*
for ($i=0; $n!=5 && $i<=10 ; $i++) {
  echo nl2br ($n[$i]."\n") ;
  if ($n[$i]==5) {
    echo "Se encontró un 5";
    exit;
  }
}
// WARNING:BIEN


$i=0;
while ($i <= 10) {
  echo nl2br ($n[$i]."\n");
  if ($n[$i]==5) {
    echo "Se encontró un 5";
    exit;
  }
  $i++;
}
*/
// WARNING:BIEN


$i=0;
do {
  echo nl2br ($n[$i]."\n");
  if ($n[$i]==5) {
    echo "Se encontró un 5";
    exit;
  }
  $i++;
} while ($i <= 10);

// WARNING:BIEN
