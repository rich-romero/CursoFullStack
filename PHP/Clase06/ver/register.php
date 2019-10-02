<?PHP
  $array_paises=[
    "Argentina",
    "Brasil",
    "Bolivia",
    "Chile",
    "Paraguay",
    "Perú",
    "Venezuela",
    "Colombia",
    "Uruguay",
    "Ecuador"
  ];
  $categoriasJson = file_get_contents('cat.json');
  $categorias = json_decode($categoriasJson, true);
  $name = "";
  $username ="";
  $email = "";
  $edad ="";
  $pais_enviado="";
  $intereses = [];
  $genre="";
  $password="";

  $emptyNameError = false;
  $emptyUsernameError = false;
  $invalidEmailError = false;
  $notNumericAgeError = false;
  $emptyInterestError = false;
  $emptyGenreError = false;
  $emptyCountryError = false;
  $notSetPasswordError = false;
  $confirmPasswordError = false;
// if que verifica si se mando el formulario
if (isset($_POST["Submit"])) {
  //validaciones
  if (!isset($_POST["name"]) || strlen($_POST["name"]) >= 15 || strlen($_POST["name"])==0){
    $emptyNameError = true;
  } else {
    $name=$_POST["name"];
  }
  if (!isset($_POST["username"]) || strlen($_POST["username"]) >= 15){
    $emptyUsernameError = true;
  } else {
    $username=$_POST["username"];
  }
  if (!isset($_POST["email"]) || !filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    $invalidEmailError = true;
  }else {
    $email = $_POST["email"];
  }
  if (!isset($_POST["edad"]) || !is_numeric($_POST["edad"])){
    $notNumericAgeError = true;
  } else {
    $edad=$_POST["edad"];
  }
  if (!isset($_POST["intereses"])){
    $emptyInterestError = true;
  }else{
    $intereses=$_POST["intereses"];
  }
  if (!isset($_POST["gen"])){
    $emptyGenreError = true;
  }else{
    $genre=$_POST["gen"];
  }
  if (!isset($_POST["country"])||$_POST["country"]==""){
    $emptyCountryError = true;
  }else{
    $pais_enviado=$_POST["country"];
  }
  if (!isset($_POST["password"])) {
    $notSetPasswordError = true;
  } elseif (!isset($_POST["confirm_password"]) || $_POST["password"]!= $_POST["confirm_password"] ) {
    $confirmPasswordError = true;
  } else {
    $password = $_POST["password"];
  }
  if (!$emptyNameError && !$invalidEmailError && !$notNumericAgeError && !$emptyInterestError && !$emptyGenreError && !$emptyCountryError && !$notSetPasswordError && !$confirmPasswordError) {
//encripta la contraseña confirmada y guarda todos los datos en el array usuario
      $md5Pass = md5($password);
      $usuario = ["name"=>$name,"email"=>$email,"username" => $username, "intereses"=>$intereses,"edad"=>$edad,"pais"=>$pais_enviado,"gen"=>$genre, "password"=>$md5Pass];

//si el archivo usuarios.json existe ,traecla informacion que contenga a usuarioReg( como texto), luego convirte
//ese tecto en array en usuariosDec
//SINO crea usuariosDec como array vacio
      if (file_exists('usuarios.json')) {
        $usuariosReg = file_get_contents("usuarios.json");
        $usuariosDec=json_decode($usuarios,true);
      } else {
        $usuariosDec=[];
      }
//si el array usuariosDec esta vacio ,agregara al final de este el usuario que se quiere registrar ,
//se codificara con .json en $usuariosJson
//creara y guardara en un archivo .json  $usuariosJson  y saldra del programa
//SINO verificara que el usuario que se quiere registar no exista previamente ,comparando los userame.
      if (empty($usuariosDec)) {
        $usuariosDec[]=$usuario;
        $usuariosJson = json_encode($usuariosDec,JSON_PRETTY_PRINT);
        file_put_contents('usuarios.json',$usuariosJson);
        header("Location:felicitaciones.php");
        exit;
      }else {
        foreach ($usuariosDec as $key => $value) {
          if ($username==$key["username"]) {
            echo "El usuario ya existe";
          }
          else{
            $usuariosDec[]=$usuario;
            $usuariosJson = json_encode($usuariosDec,JSON_PRETTY_PRINT);
            file_put_contents('usuarios.json',$usuariosJson);
            header("Location:felicitaciones.php");
            exit;
          }
        }
      }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>


                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label>
                    <?php if ($emptyNameError): ?>
                      <span>El campo de nombre debe tener mas de 0 y menos de 15 caracteres</span>
                    <?php endif; ?>
                    <br/>
                    <input type='text' name='name' id='name' value='<?= $name ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label>
                    <?php if ($invalidEmailError): ?>
                      <span>El email no cumple el formato;</span>
                    <?php endif; ?>
                    <br/>
                    <input type='text' name='email' id='email' value='<?= $email?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label>
                    <?php if ($emptyUsernameError): ?>
                      <span>El campo de usuario debe tener mas de 0 y menos de 15 caracteres</span>
                    <?php endif; ?>
                    <br/>
                    <input type='text' name='username' id='username' value='<?= $username?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class="container">
                  <label for="intereses[]">Intereses:</label><br>
                  <?php foreach ($categorias['categorias'] as $valor => $categoria): ?>
                    <input type="checkbox" name="intereses[]" value="<?= $categoria['id']?>" <?= in_array($categoria['id'],$intereses) ? "checked": "" ?>><?= $categoria['nombre'] ?><br>
                  <?php endforeach; ?>
                </div>
                <div class="container">
                  <label for="edad">Edad:</label>
                  <input type="number" name="edad" value="<?= $edad?>">
                  <?php if ($notNumericAgeError): ?>
                    <span>El campo de edad debe ser un numero no vacio</span>
                  <?php endif; ?>
                </div>
                <div class="container">
                  <label for="country">Pais</label>
                  <select class="" name="country">
                    <option value=""></option>
                  <?php foreach ($array_paises as $llave => $pais):?>
                    <option value="<?=$llave;?>" <?= (!empty($pais_enviado) && $pais_enviado == $llave) ? "selected" : "" ; ?>><?=$pais;?></option>
                  <?php endforeach; ?>
                  </select>
                  <?php if ($emptyCountryError ) :?>
                    <span>error aqui</span>
                  <?php endif ?>
                </div>
                <div class="container">
                  <label for="gen">Genero : </label>
                  <?php if ($emptyGenreError): ?>
                    <span>Debe indicar un genero;</span>
                  <?php endif; ?>
                  <br>
                    <input type="radio" name="gen" value="v"<?= ($genre == "v")?"checked":"" ?>>varon<br>
                    <input type="radio" name="gen" value="m"<?= ($genre == "m")?"checked":"" ?>>mujer<br>
                    <input type="radio" name="gen" value="o"<?= ($genre == "o")?"checked":"" ?>>otre<br>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label>
                    <?php if ($notSetPasswordError): ?>
                      <span>Debe indicar una contraseña;</span>
                    <?php endif; ?>
                    <br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                    <?php if (!isset($_GET['version_corta'])): ?>
                        <label for='password' >Confirmar contaseña*:</label>
                        <?php if ($confirmPasswordError): ?>
                          <span>La contraseña debe coincidir con la elegida en el campo de arriba;</span>
                        <?php endif; ?><br/>
                        <div class='pwdwidgetdiv' id='theconfirmpwddiv' ></div>
                        <input type='password' name='confirm_password' id='confirm_password' maxlength="50" />
                        <div id='confirm_password_errorloc' class='error' style='clear:both'></div>
                    <?php endif; ?>
                </div>
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
