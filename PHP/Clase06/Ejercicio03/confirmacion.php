<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body style="height:100vh">
    <div class="" style="width: 600px; border: 1px black solid; padding: 15px;margin: 10% auto;">
      <p style=" margin-block-start: 0em; margin-block-end: 0em;">Muchas gracias por registrarte <b><?=$_GET['name']?></b> de <b><?=$_GET['pais']?></b>, nos has dicho que tienes <b><?=$_GET['edad']?></b> años, ya hemos registrado tu correo <b><?=$_GET['email']?></b>.<br>
      <?php
        if (is_array($_GET['hobbies'])):?>
        Tus hobbies son:
        <?php
          $cuenta=count($_GET['hobbies']);
          foreach ($_GET['hobbies'] as $subdat) {
            global $cuenta;
            if ($cuenta<2) {
              echo "<b>".$subdat."</b>.<br>";
              continue;
            }
            echo "<b>".$subdat."</b>, ";
            $cuenta--;
          };endif; ?>
        Tu usuario <b><?=$_GET['username']?></b> se habilitará con la contraseña <b><?=$_GET['password']?></b>.</p>
    </div>
  </body>
</html>
