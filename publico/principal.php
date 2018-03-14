<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>BAROLO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="../web/css/bootstrap.min.css" />
        <!-- bootstrap grid -->
        <link rel="stylesheet" href="../web/css/bootstrap-theme.min.css" />
        <!-- bootstrap theme -->
        <link rel="stylesheet" href="../web/css/reset.min.css" />
        <!-- bootstrap grid -->
        <link rel="stylesheet" href="../web/css/style.css" />
        <!-- template styles -->
        <link rel="stylesheet" href="../web/css/color-default.css" />
        <!-- default template color styles -->
        <link rel="stylesheet" href="../web/css/responsive.css" />
        <!-- responsive styles -->


        <link href='https://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet'
            type='text/css'>
        <!--fuentes mapa google-->
        <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500,600,700' rel='stylesheet' type='text/css'>
        <!--mapa google-->
        <link rel="stylesheet" href="../web/css/principal.css">
        <!-- css del  mapa-->

        <!-- Google Web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>

        
    </head>

    <body>
        <header>       
            <?php include("components/menu.php") ?>
        </header>
        
        <video id="video-background" poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/fashion.jpg" playsinline autoplay
            muted loop>
            <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/fashion.webm" type="video/webm">
            <source src="http://thenewcode.com/assets/videos/fashion.mp4" type="video/mp4">
        </video>

        <!-- .page-content start -->
        <div class="page-content">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12">
                        <div class="item">
                            <!-- .event-item-container start -->
                            <ul class="event-item-container">

                                <!-- .event-item-list.event-item-content start -->
                                <li class="event-item-list event-item-content centered">
                                    <div class="custom-heading style-1">
                                        <h3>
                                            <span>Lorem</span>
                                        </h3>
                                        <h3>Lorem ipsum</h3>

                                        <!-- .divider.style-1 start -->
                                        <div class="divider style-1 center">
                                            <span class="hr-simple left"></span>

                                            <span class="hr-simple right"></span>
                                        </div>
                                    </div>
                                    <!-- .custom-heading.style-2 end -->
                                    <ul class="article-meta">
                                        <li>Lorem</li>
                                        <li>Ipsum</li>
                                        <li>Dolor </li>
                                    </ul>
                                    <!-- .article-meta end -->
                                    <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae dicta sunt explicabo.</p>
                                    <a class="discover_more has_transition_400" href="reservhabitacion.html">DISCOVER MORE</a>
                                </li>
                                <!-- .event-item-list.event-item-content end -->
                            </ul>
                            <!-- .event-item-container end -->
                        </div>

                        <div class="item">
                            <!-- .event-item-container start -->
                            <ul class="event-item-container">

                                <!-- .event-item-list.event-item-content start -->
                                <li class="event-item-list event-item-content centered">
                                    <div class="custom-heading style-1">
                                        <h3>
                                            <span>Lorem</span>
                                        </h3>
                                        <h3>Lorem ipsum</h3>

                                        <!-- .divider.style-1 start -->
                                        <div class="divider style-1 center">
                                            <span class="hr-simple left"></span>

                                            <span class="hr-simple right"></span>
                                        </div>
                                    </div>
                                    <!-- .custom-heading.style-2 end -->
                                    <ul class="article-meta">
                                        <li>Lorem</li>
                                        <li>Ipsum</li>
                                        <li>Dolor </li>
                                    </ul>
                                    <!-- .article-meta end -->
                                    <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae dicta sunt explicabo.</p>
                                    <a class="discover_more has_transition_400" href="reservhabitacion.html">DISCOVER MORE</a>
                                </li>
                                <!-- .event-item-list.event-item-content end -->
                            </ul>
                            <!-- .event-item-container end -->
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .page-content end -->


        <!-- .page-content start -->

        <!-- Barolochi roland's code-->

        <!-- Google map-->
        <div class="container mapache">
            <h1 class="textinho">Nuestra Ubicacion</h1>
            <div id="map_container"></div>
            <div id="map"></div>
        </div>




        <!--- Tarjetas salas-->
        <ul class="cards">
            <div class="col-md-12 centered">

                <div class="custom-heading style-1 altura">
                    <h1>
                        <span>Nuestros servicios</span>
                    </h1>
                </div>
            </div>
            <li class="cards__item">
                <div class="card">
                    <div class="card__image card__image--fence"></div>
                    <div class="">
                        <div class="col-md-12 centered">
                            <div class="custom-heading style-1">
                                <h2>Habitaciones</h2>
                            </div>
                            <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo.</p>
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
                            <div class="custom-heading style-1">
                                <h2>Salas de conferencia</h2>
                            </div>
                            <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo.</p>
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
                            <div class="custom-heading style-1">
                                <h2>Restaurante</h2>
                            </div>
                            <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo.</p>
                            <a class="discover_more has_transition_400" href="#">DISCOVER MORE</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!--- Tarjetas salas-->




        <div class="cont">
            <div class="form sign-in">
                <h2> Nuestra mision</h2>
                <label>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                        ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                        fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                        justo. Nullam dictum felis eu pede mollis pretium.</p>
                </label>
            </div>
            <div class="sub-cont">
                <div class="img">
                    <!--panel-->
                    <div class="img__text m--up">
                        <h2>New here?</h2>
                        <p>Sign up and discover great amount of new opportunities!</p>
                    </div>
                    <!--panel-->
                    <div class="img__text m--in">
                        <h2>One of us?</h2>
                        <p>If you already has an account, just sign in. We've missed you!</p>
                    </div>
                    <!--panel-->
                    <div class="img__btn">
                        <span class="m--up">vision</span>
                        <span class="m--in">mision</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <h2>Nuestra vision</h2>
                    <label>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                            felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet
                            a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
                    </label>
                </div>
            </div>
        </div>

        <footer class="footer1">
            <?php include("components/footer.php") ?>
        </footer>


        <!--Mis scripts-->
        <script src="../web/js/jquery.min.js"></script>
        <!--Librerias de ajax-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByIz1CN1nmKAnxuAdYyzHXesX3aX7fGYQ&callback=initMap" async
            defer></script>
        <!--MY API PASSWORD-->
        <script src='../web/js/jquery.noisy.min.js'></script>
        <script src="../web/js/map.js"></script>
        <!--Scrip del mapa-->
        <script src="../web/js/index.js"></script>
        <script  src="../web/js/menu.js"></script>




    </body>

</html>