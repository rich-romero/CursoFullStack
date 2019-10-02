<?php

$ceu = [
          "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé",$esAmericano=true],
          "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo",$esAmericano=true],
          "Colombia" => ["Cartagena", "Bogota", "Barranquilla",$esAmericano=true],
          "Francia" => ["Paris", "Nantes", "Lyon",$esAmericano=false],
          "Italia" => ["Roma", "Milan", "Venecia",$esAmericano=false],
          "Alemania" => ["Munich", "Berlin", "Frankfurt",$esAmericano=false]
];

  var_dump($ceu);
  echo nl2br("\n\n");
/*
// WARNING:FOREACH-IF
  foreach ($ceu as $pais => $value) {
      echo nl2br("Las ciudades de ".$pais.' son:<ul style="margin-block-start: 0em; padding-inline-start: 80px;">');
      for ($i=0; $i<3 ; $i++) {
        echo nl2br("<li>".$value[$i]."</li>");
      }
      echo "</ul>";
      }
*/
// WARNING:FOREACH-FOREACH
foreach ($ceu as $pais => $ciudad) {
    if ($ceu["$pais"][3]==false) {
      continue;
    }
    echo nl2br("Las ciudades de ".$pais.' son:<ul style="margin-block-start: 0em; padding-inline-start: 80px;">');
    foreach ($ceu["$pais"] as $ciudad) {
      if ($ciudad==3) {
        continue;
      }
      echo "<li>".$ciudad."</li>";
    }
    echo "</ul>";
    }
