<?PHP

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='confirmacion.php' method='get'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='edad' >edad: </label><br/>
                    <input type='number' name='edad' id='edad' value='18' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                  <label for="hobbies[]">Hobbies:</label><br>
                  <input type="checkbox" name="hobbies[]" value="Ciclismo">Ciclismo
                  <input type="checkbox" name="hobbies[]" value="Pintura">Pintura
                  <input type="checkbox" name="hobbies[]" value="Dibujo">Dibujo
                  <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                    <!--////// EJERCICIO B ///////-->
                    <?php if (!isset($_GET['versionCorta'])): ?>
                    <!--////// EJERCICIO A ///////-->
                    <label for='confirmpassword' >Confirmar contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='confirmthepwddiv' ></div>
                    <input type='password' name='confirmpassword' id='confirmpassword' maxlength="50" />
                    <div id='confirmregister_password_errorloc' class='error' style='clear:both'></div>
                  <?php endif; ?>
                </div>
                <!--////// EJERCICIO C ///////-->
                <?php $paises=["Argentina","Bolivia","Brasil","Chile","Colombia","Cuba","Ecuador","Uruguay","Paraguay","Perú"]; ?>
                <div class='container'>
                    <label for='username' >Nacionalidad:</label><br/>
                    <select class="" name="pais">
                      <?php foreach ($paises as $pais) {
                        echo '<option value="'.$pais.'">'.$pais.'</option>';} ?>
                    </select> <br/>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
