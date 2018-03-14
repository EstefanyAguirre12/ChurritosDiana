<!DOCTYPE html>

<html>
  <head>
      <meta charset="utf-8">
      <title>BAROLO</title>
      
      <meta name="author" content="pixel-industry">
      <meta name="keywords" content="CSS, HTML5, clean, restaurant, jQuery, retina, bootstrap">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Stylesheets -->
      <link rel="stylesheet" href="../web/css/bootstrap.min.css"/><!-- bootstrap grid -->
      <link rel="stylesheet" href="../web/css/bootstrap-theme.min.css"/><!-- bootstrap theme -->
      <link rel="stylesheet" href="../web/css/reset.min.css"/><!-- bootstrap grid -->
      <link rel="stylesheet" href="../web/css/style.css"/><!-- template styles -->
      <link rel="stylesheet" href="../web/css/color-default.css"/><!-- default template color styles -->   
      <link rel="stylesheet" href="../web/css/responsive.css"/><!-- responsive styles -->



      <!-- Google Web fonts -->
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>

  </head>

  <body>

    <header>       
      <?php include("components/menu.php") ?>
    </header>

    <div class="font-cover" id="headparallax">
      <div class="page-content custom-img-background dark custom-col-padding mb-100">       
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered">
                <div class="custom-heading style-1" >
                    <h2><span>Exquisite cuisine</span></h2>
                    <h2>A FEAST FOR YOUR SENSES</h2>
                    <!-- .divider.style-2 start -->
                    <div class="divider style-2 center">
                        <span class="hr-double left"></span>
                        
                        <span class="hr-double right"></span>
                    </div>
                  </div><!-- .custom-heading.style-1 end -->
              </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
          </div><!-- .page-content end -->
      </div>

      <!--- Tarjetas salas--> 
      <ul class="cards">
        <div class="col-md-12 centered">
          <div class="custom-heading style-1 altura" >    
            <h1><span>Salas de conferencia</span></h1>
          </div>     
        </div>
        <li class="cards__item">
          <div class="card">
            <div class="card__image card__image--fence"></div>
            <div class="">
              <div class="col-md-12 centered">
                <div class="custom-heading style-1" >
                  <h2>Habitacion 200</h2>             
                </div>
                <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <a class="discover_more has_transition_400" href="#">DISCOVER MORE</a>
              </div>
            </div>
          </div>
        </li>
        <li class="cards__item">
          <div class="card">
            <div class="card__image card__image--river"></div>
            <div class="">
              <div class="col-md-12 centered">
                <div class="custom-heading style-1" >
                  <h2>Habitacion 200</h2>            
                </div>
                <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <a class="discover_more has_transition_400" href="#">DISCOVER MORE</a>              
              </div>
            </div>
          </div>
        </li>
        <li class="cards__item">
          <div class="card">
            <div class="card__image card__image--record"></div>
            <div class="">
              <div class="col-md-12 centered">
                <div class="custom-heading style-1" >
                  <h2>Habitacion 200</h2>         
                </div>
                <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
  
                <a class="discover_more has_transition_400" href="#">DISCOVER MORE</a>
            
              </div>
            </div>
          </div>
        </li>
      </ul>
      <!--- Tarjetas salas-->

      <!-- .row start -->
      <div class="row">
        <section class="section">
          <div class="col-md-12 centered">
            <div class="custom-heading style-1" >    
              <h1><span>NOM NOM gallery</span></h1>
            </div>
            <div class="grid">
              <div class="image">
                <div class="image__details">
                  jelly-o brownie sweet
                </div>
              </div>
              <div class="image image--large">
                <div class="image__details">
                  Muffin jelly gingerbread 
                </div>
              </div>
              <div class="image image--medium">
                <div class="image__details">
                  sesame snaps chocolate
                </div>
              </div>
              <div class="image image--large">
                <div class="image__details">
                  Oat cake
                </div>
              </div>
              <div class="image image--medium">
                <div class="image__details">
                  Dragée pudding brownie
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- .row end -->

      <footer class="footer1">
          <?php include("components/footer.php") ?>
      </footer>

      
      <script src="../web/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
      <script src="../web/js/bootstrap.min.js"></script><!-- .bootstrap script -->
      <script src="../web/js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
      <script  src="../web/js/menu.js"></script>

    </body>
</html>
