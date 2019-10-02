<?php

$ceu = [
          "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
          "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
          "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
          "Francia" => ["Paris", "Nantes", "Lyon"],
          "Italia" => ["Roma", "Milan", "Venecia"],
          "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
/* foreach ($ceu as $pais => [$ciudad]) {
  echo nl2br("Las ciudades de ".$pais." son:\n");
  echo nl2br("<ul><li>".$pais[]."</li></ul>");
  }
*/
/*
foreach ($ceu as $pais => $value) {
    echo nl2br("Las ciudades de ".$pais." son:<ul>");
    foreach ($ceu["$pais"] as $ciudad => $value) {
    echo nl2br("<li>".$pais[$ciudad]."</li>");
    }
    echo "</ul>";
    }
*/
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
    echo nl2br("Las ciudades de ".$pais.' son:<ul style="margin-block-start: 0em; padding-inline-start: 80px;">');
    foreach ($ceu["$pais"] as $ciudad) {
      echo "<li>".$ciudad."</li>";
    }
    echo "</ul>";
    }
