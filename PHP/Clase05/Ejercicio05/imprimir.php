<?php

/*
foreach ($_GET as $datos =>$subdat) {
  echo $datos;
  if (is_array($_GET["$datos"])) {
    echo ':<ul style="margin-block-start: 0em; padding-inline-start: 50px; margin-block-end: 0em;">';
    foreach ($_GET["$datos"] as $subdat) {
      echo '<li style="list-style-type: none">'.$subdat."</li>";
    };
    echo "</ul>";
    continue;
  }
  else {
    echo ": ";
  }
  echo $_GET["$datos"]."<br>";
}

echo "<br><br>";
*/

foreach (getAllHeaders() as $key => $datos) {
  echo $key.": ";
  if (is_array(getAllHeaders()["$key"])) {
    echo ':<ul style="margin-block-start: 0em; padding-inline-start: 50px; margin-block-end: 0em;">';
    foreach (getAllHeaders()["$key"] as $datos => $valor) {
      echo '<li style="list-style-type: none">'.$datos."</li>";
    }
  }
  echo getAllHeaders()["$key"].$datos."<br>";
}
echo "<br><br>";
var_dump(getAllHeaders());

/////// AYUDAS //////

//    https://www.php.net/manual/es/function.getallheaders.php      //
