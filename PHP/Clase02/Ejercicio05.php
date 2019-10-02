<?php
  $nombreDeUsuario="admin";
  $contraseniaDeUsuario="1234";

  if ($nombreDeUsuario=="admin") {
    if ($contraseniaDeUsuario=="1234") {
        echo "Bienvenido";
    }
    else {
      echo "Hay un error en la contraseña";
    }
  }
  else {
    echo "Hay un error en el usuario";
  }
