<?php
/////// EJERCICIO 2 - i ///////
$categoriasJson = file_get_contents('categorias.json');
$categorias = json_decode($categoriasJson, true);
var_dump ($categorias)
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="archivos.html" method="post">
      <?php foreach ($categorias["categorias"] as $hobbies):
        //echo $hobbies["id"].$hobbies["nombre"];}
        ?>
        <input type="checkbox" name="hobbies" value="<?=$hobbies["id"]?>">
        <label for=""><?=$hobbies["nombre"]?></label><br>
      <?php endforeach?>
    </form>
    <?php
    var_dump($hobbies);
    var_dump($valor); ?>
  </body>
</html>
