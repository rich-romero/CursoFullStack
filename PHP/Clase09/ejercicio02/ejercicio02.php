<?php
  $coloresFondo=['red','black','cyan','blue'];
  if (isset($_POST["submit"]) && isset($_POST['color'])) {
    setcookie('color',$_POST['color']);
    header("Location:ejercicio02.php");
    exit;
  }

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header <?php if (isset($_COOKIE['color'])):?>style="background-color:<?= $_COOKIE['color']?>" <?php endif;?>
            <?php if (!isset($_COOKIE['color'])):?>style="background-color:red" <?php endif;?>
            >
      <a class="title" href="#">Richardbook</a>
    </header>
    <form class="form" action="ejercicio02.php" method="post">
      <!--  <input type="color" name="color" value="">  -->
      <select class="" name='color'>
        <?php foreach ($coloresFondo as $color):?>
          <option value="<?=$color?>"><?=$color?></option>
        <?php endforeach;?>
      </select>
      <button type="submit" name="button">Enviar</button>
    </form>
  </body>
</html>
