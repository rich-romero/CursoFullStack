<?php

foreach ($_GET as $datos) {
  if (is_array($datos)) {
    foreach ($datos as $value) {
      echo ($value."<br>");
    };
    continue;
  }
  else {
    echo $datos."<br>";
  }
}

 ?>
