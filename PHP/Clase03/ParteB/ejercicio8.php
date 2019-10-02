<?php

$mascota=[
  "animal" => ["Perro"],
  "edad" => [8],
  "altura" => [1.21],
  "nombre" => ["Simba"],
];

foreach ($mascota as $dato => $valor) {
  echo $dato.": ";
  for ($i=0; $i<1; $i++) {
    echo $valor[$i];
  }
  echo nl2br(".\n");
}
