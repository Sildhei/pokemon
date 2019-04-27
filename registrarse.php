  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
  </head>

  <body>
    <div class="container-fluid wrap-login">
      <div class="row">
        <div class="col-md-6 bg-left" style="background-image:url(https://wallpaperaccess.com/full/450122.jpg);background-position-x:50%;"></div>
        <div class="col-md-6">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png" class="logo-login" />
          <form method="POST" action="registro.php" class="login-form">
          <h5>Registrarse</h5>
            <div class="form-group">
              <h6>Mail</h6> <input type="email" name="email" required class="form-control"> 
            </div>
            <div class="form-group">
              <h6>Nombre de usuario</h6> <input type="text" name="user" class="form-control">
            </div>
            <div class="form-group">
              <h6>Contraseña</h6> <input type="password" name="password" class="form-control">
            </div>
            <div class="form-login-btns">
            <input type="Submit" name="Mandar" value="Mandar" class="btn btn-primary">
            </div>
          </form>
          <a href="inicio.php" class="forget-password">Volver al login</a>
        </div>
      </div>
    </div>
  </body>

  </html>