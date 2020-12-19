<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="./css/styles.css"/>
    <title>index</title>
  </head>
  <body>
    <h1 class="title">Formulario</h1>
    <div class="container">
      <ul class="links" id="links">
        <li class="links__item links__item--active">Iniciar sesion</li>
        <li class="links__item">Registrarse</li>
      </ul>
      <div class="forms" id="forms">
        <form class="form" action="php.php" method="POST">
          <div class="form__field">
            <label class="form__label" for="name">Nombre</label>
            <input class="form__input" type="text" name="name" autocomplete="off" id="name"/>
          </div>
          <div class="form__field">
            <label class="form__label" for="password">Contraseña</label>
            <input class="form__input" type="text" name="password" id="password"/>
          </div>
          <div class="form__field form__field--check">
            <input class="form__check-input" type="checkbox" name="signed-in" id="signed-in"/>
            <label class="form__check-label" for="signed-in">Mantener sesion iniciada</label>
          </div>
          <div class="form__field">
            <input class="form__submit" type="submit" value="Iniciar sesion" id="submit-sign-up"/>
          </div><a href="#" id="register">¿No estas registrado?</a>
        </form>
        
        <form class="form" action="/public/php.php">
          <div class="form__field">
            <label class="form__label" for="name">Nombre</label>
            <input class="form__input" type="text" name="name" autocomplete="off" id="name2"/>
          </div>
          <div class="form__field">
            <label class="form__label" for="password">Contraseña</label>
            <input class="form__input" type="password" name="password" id="password2"/>
          </div>
          <div class="form__field">
            <label class="form__label" for="password2">Verifica la Contraseña</label>
            <input class="form__input" type="password" name="password" id="password3"/>
          </div>
          <div class="form__field">
            <label class="form__label" for="email">Correo Electronico</label>
            <input class="form__input" type="text" name="email" autocomplete="off" id="email"/>
          </div>
          <div class="form__field">
            <input class="form__submit" type="submit" value="Sign up" id="submit-sign-up2"/>
          </div><a href="#" id="login">¿Ya tienes una cuenta? Inicia sesion</a>
        </form>
      </div>
    </div>
    <script src="js/scripts-min.js"></script>
<?php
if(isset($_POST["submit-sign-up"])){

  $usuario=$_POST["name"];
  $edad = $_POST["password"];

  if($usuario == "Juan" & $edad =="1234"){
    echo "<p class=\"validado\">puedes entrar pto.</p>";
  } 
  else{
   echo "<p class=\"no_validado\">no puedes entrar zrra.</p>";
  }
}

?>
  </body>
  
</html>


