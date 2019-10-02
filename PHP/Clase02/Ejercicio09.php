<?php
  $numero=8.5;

  switch ($numero) {
    case ($numero<4):
      echo $numero."Desaprobado";
      break;
    case ($numero>=4 && $numero<6):
      echo $numero."Zafamos";
      break;
    case ($numero>=6 && $numero<9):
      echo $numero."Bien!!";
      break;
    case ($numero>=9 && $numero<10):
      echo $numero."Muy bien!!";
      break;
    case ($numero==10):
      echo $numero."Excelente!!";
      break;
    default:
      echo $numero."Insertar nota";
      break;
  }
