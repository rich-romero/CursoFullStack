<?php
session_start();
if (isset($_SESSION["contador"])) {
  echo $_SESSION["contador"];
}
else {
  echo "No se encontró el contador";
}
 ?>
