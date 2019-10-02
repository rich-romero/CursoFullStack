<?php
session_start();
if (isset($_POST["enviar"])) {
  if ($_POST["enviar"]=="incrementar") {
    $_SESSION["contador"]++;
    echo "Se incremento el contador<br>";
  }
  elseif ($_POST["enviar"]=="reiniciar") {
    $_SESSION["contador"]=0;
    echo "Se reinició el contador <br>";
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="post">
       <button type="submit" name="enviar" value="incrementar">Incrementar</button>
       <button type="submit" name="enviar" value="reiniciar">Reiniciar</button>
     </form>
   </body>
 </html>
