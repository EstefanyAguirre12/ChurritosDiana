<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Inicio</title>
    <?php 
    require_once("php/estilos.php");
   ?>
  </head>

  <body class="login ">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="login_panel">
              <h1>Inicio de sesion</h1>
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Usuario">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Contraseña">
                    <span class="fas fa-unlock-alt form-control-feedback left" aria-hidden="true"></span>
              </div>
              <div>
              <a href="index.php"> <button  type="button" class="btn btn-info btn-sm">  iniciar sesion</button></a>
               
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
