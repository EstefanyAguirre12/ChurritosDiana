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

  <body class="nav-md">
    <div class="container body">

      <div class="main_container">
      <?php 
        require_once("php/panel.php");
       ?>

           <!-- page content -->
        <div class="right_col" role="main">

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo odit eligendi minima nemo, quod possimus dolore vero quam consectetur eveniet asperiores ad praesentium officiis dolorem non molestias eos facere accusamus?
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php 
    require_once("php/scrips.php");
   ?>
  </body>
</html>
