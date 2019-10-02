<?php
echo "VARIABLE \$_GET<br>";
foreach ($_GET as $datos =>$subdat) {
  echo ucfirst($datos);
  if (is_array($_GET["$datos"])) {
    echo ": ";
    $cuenta=count($_GET["$datos"]);
    foreach ($_GET["$datos"] as $subdat) {
      global $cuenta;
      if ($cuenta<2) {
        echo $subdat.".";
        continue;
      }
      echo $subdat.", ";
      $cuenta--;
    };
    echo "<br>";
    continue;
  }
  else {
    echo ": ";
  }
  echo $_GET["$datos"].".<br>";
}
echo "<br>";

echo "VARIABLE \$_SERVER<br>";
foreach ($_SERVER as $datos =>$subdat) {
  echo ucfirst($datos);
  if (is_array($_SERVER["$datos"])) {
    echo ": ";
    $cuenta=count($_SERVER["$datos"]);
    foreach ($_SERVER["$datos"] as $subdat) {
      global $cuenta;
      if ($cuenta<2) {
        echo $subdat.".";
        continue;
      }
      echo $subdat.", ";
      $cuenta--;
    };
    echo "<br>";
    continue;
  }
  else {
    echo ": ";
  }
  echo $_SERVER["$datos"].".<br>";
}
echo "<br>";

echo "VARIABLE \$_FILES<br>";
foreach ($_FILES as $datos =>$subdat) {
  echo ucfirst($datos);
  if (is_array($_FILES["$datos"])) {
    echo ": ";
    $cuenta=count($_FILES["$datos"]);
    foreach ($_FILES["$datos"] as $subdat) {
      global $cuenta;
      if ($cuenta<2) {
        echo $subdat.".";
        continue;
      }
      echo $subdat.", ";
      $cuenta--;
    };
    echo "<br>";
    continue;
  }
  else {
    echo ": ";
  }
  echo $_FILES["$datos"].".<br>";
}
echo "<br>";

echo "VARIABLE \$_REQUEST<br>";
foreach ($_REQUEST as $datos =>$subdat) {
  echo ucfirst($datos);
  if (is_array($_REQUEST["$datos"])) {
    echo ": ";
    $cuenta=count($_REQUEST["$datos"]);
    foreach ($_REQUEST["$datos"] as $subdat) {
      global $cuenta;
      if ($cuenta<2) {
        echo $subdat.".";
        continue;
      }
      echo $subdat.", ";
      $cuenta--;
    };
    echo "<br>";
    continue;
  }
  else {
    echo ": ";
  }
  echo $_REQUEST["$datos"].".<br>";
}
echo "<br>";

echo "VARIABLE \$_SESSION<br>";
foreach ($_SESSION as $datos =>$subdat) {
  echo ucfirst($datos);
  if (is_array($_SESSION["$datos"])) {
    echo ": ";
    $cuenta=count($_SESSION["$datos"]);
    foreach ($_SESSION["$datos"] as $subdat) {
      global $cuenta;
      if ($cuenta<2) {
        echo $subdat.".";
        continue;
      }
      echo $subdat.", ";
      $cuenta--;
    };
    echo "<br>";
    continue;
  }
  else {
    echo ": ";
  }
  echo $_SESSION["$datos"].".<br>";
}
echo "<br>";

echo "VARIABLE \$_COOKIES<br>";
foreach ($_COOKIES as $datos =>$subdat) {
  echo ucfirst($datos);
  if (is_array($_COOKIES["$datos"])) {
    echo ": ";
    $cuenta=count($_COOKIES["$datos"]);
    foreach ($_COOKIES["$datos"] as $subdat) {
      global $cuenta;
      if ($cuenta<2) {
        echo $subdat.".";
        continue;
      }
      echo $subdat.", ";
      $cuenta--;
    };
    echo "<br>";
    continue;
  }
  else {
    echo ": ";
  }
  echo $_COOKIES["$datos"].".<br>";
}
echo "<br>";

echo "VARIABLE \$GLOBALS<br>";
foreach ($GLOBALS as $datos =>$subdat) {
  echo ucfirst($datos);
  if (is_array($GLOBALS["$datos"])) {
    echo ": ";
    $cuenta=count($GLOBALS["$datos"]);
    foreach ($GLOBALS["$datos"] as $subdat) {
      global $cuenta;
      if ($cuenta<2) {
        echo $subdat.".";
        continue;
      }
      echo $subdat.", ";
      $cuenta--;
    };
    echo "<br>";
    continue;
  }
  else {
    echo ": ";
  }
  echo $GLOBALS["$datos"].".<br>";
}
echo "<br>";
