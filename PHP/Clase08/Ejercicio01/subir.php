<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio integrador 1 - Carga de Datos</title>
</head>
<body>
  <?php
    if (isset($_POST["submit"])) {
      if($_FILES["archivo"]["error"]=== UPLOAD_ERR_OK){
        $nombre=$_FILES["archivo"]["error"];
        $archivo=$_FILES["archivo"]["tmp_name"];
        $ext=pathinfo($nombre,PATHINFO_EXTENSION);
        $miarchivo=dirname(__FILE__)."/"."subidos"."/".$nombre;
        if (file_exists($miarchivo)) {
          echo "El archivo ya existe";
          /*while ($a <= 10) {
            // code...
          }*/
        }else {
          move_uploaded_file($archivo,$miarchivo);
          echo "El archivo se ha subido con exito";
        }
      }
    }
   ?>
  <?php
    var_dump ($_POST);
    echo "<br>";
    var_dump ($_FILES);
    echo "<br>";
    // $archivos=scandir["subidos"]

  ?>
    /*<a href="#/<?= // ?>"></a>*/

  <form class="" action="index.html" method="post" enctype="multipart/form-data">
      <label for="archivo">Archivo:</label>
      <input type="file" name="" value="">
  </form>
</body>
</html>
