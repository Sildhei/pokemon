<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
</head>

<body>
  <div class="container-fluid wrap-login">
    <div class="row">
      <div class="col-md-6 bg-left"></div>
      <div class="col-md-6">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png" class="logo-login"/>
        <form method="POST" action="login.php" class="login-form">
          <div class="form-group">
            <h6>Mail</h6> <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <h6>Contraseña</h6> <input type="text" name="password" class="form-control">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <div class="form-login-btns">
            <input type="Submit" class="btn btn-primary" name="Enviar" value="Enviar">
          </div>
          <a href="registrarse.php">Registrarse</a>
        </form>
        <a href="" class="forget-password">¿Olvidaste tu Contraseña?</a>
      </div>
    </div>
  </div>
</body>

</html>