<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BAROLO</title>


    <link rel='stylesheet prefetch' href='../web/css/megayg.css'>
    <link rel="stylesheet" href="../web/css/reset.min.css" />
    <!-- bootstrap grid -->
    <link rel="stylesheet" href="../web/css/color-default.css" />
    <!-- default template color styles -->
    <link rel="stylesheet" href="../web/css/responsive.css" />
    <!-- responsive styles -->
    <link rel="stylesheet" href="../web/css/calendario.css" />
    <!-- responsive styles -->
    <link rel="stylesheet" href="../web/css/style.css" />
    <!-- responsive styles -->

    <!-- Google Web fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>


</head>

    <body>

    <header>       
            <?php include("components/menu.php") ?>
        </header>
        <div class="font-cover" id="headparallax2">

            <div class="page-content custom-img-background dark custom-col-padding mb-100">

                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 centered">
                        <div class="custom-heading style-1">
                            <h2>
                                <span>Hotel Barolo</span>
                            </h2>
                            <h2>Reserva de habitacion</h2>

                            <!-- .divider.style-2 start -->
                            <div class="divider style-2 center">
                                <span class="hr-double left"></span>

                                <span class="hr-double right"></span>
                            </div>
                        </div>
                        <!-- .custom-heading.style-1 end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .page-content end -->


        </div>

        <section id="section-main" class="section-reservation">
            <div class="w800">
                <div class="custom-heading style-1 altura">
                    <h3>
                        <span>Fecha</span>
                    </h3>
                    <h3>Llegada</h3>
                </div>
                <!-- .custom-heading.style-2 end -->

                <form action="#">
                    <div id="rcal"></div>

                    <div class="spacer"></div>
                    <div class="actions">
                    </div>
                </form>


            </div>
        </section>


        <section id="section-main" class="section-reservation">
            <div class="w800">

                <div class="custom-heading style-1">
                    <h3>
                        <span>Fecha</span>
                    </h3>
                    <h3>sALIDA</h3>
                </div>
                <!-- .custom-heading.style-2 end -->

                <form action="#">
                    <div id="rcal2"></div>

                    <div class="spacer"></div>
                    <div class="actions">
                        <a class="discover_more has_transition_400" href="index.html">SELECCIONAR</a>
                    </div>
                </form>


            </div>
        </section>


        <!-- .page-content start -->
        <div class="page-content">
            <div class="">
                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12 centered">
                        <div class="custom-heading style-1">
                            <h2>
                                <span>Habitaciones disponibles</span>
                            </h2>

                        </div>

                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .page-content end -->

        <div class="card-column">
            <article class="cardh">
                <a href="#" class="cardh-image" style=" background-image: url(https://www.flemings-hotels.com/img/flemings-selection-hotel-frankfurt-city-komfort-zimmer.jpg);"></a>
                <section class="cardh-content">
                    <header class="cardh-header">
                        <div class="col-md-12 centered">
                            <div class="custom-heading style-1">
                                <h2>Habitacion 200</h2>

                            </div>
                            <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo.</p>

                            <a class="discover_more has_transition_400" href="reservainfo.php">MAS INFORMACION</a>
                        </div>
                    </header>

                </section>
            </article>

            <article class="cardh">
                <a href="#" class="cardh-image" style=" background-image: url(http://2q3xk01vwwv9vh0d04dce42y.wpengine.netdna-cdn.com/wp-content/uploads/2018/01/1.jpg);"></a>
                <section class="cardh-content">
                    <header class="cardh-header">
                        <div class="col-md-12 centered">
                            <div class="custom-heading style-1">
                                <h2>Habitacion 201</h2>

                            </div>
                            <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo.</p>

                            <a class="discover_more has_transition_400" href="reservainfo.php">MAS INFORMACION</a>

                        </div>
                    </header>

                </section>
            </article>

        </div>


        <footer class="footer1">
            <?php include("components/footer.php") ?>
        </footer>

        <script src="../web/js/jquery.min.js"></script><!-- jQuery library -->
        <script src="../web/js/jquery-ui.min.js"></script><!-- jQuery library -->
        <script src="../web/js/moment.min.js"></script><!-- jQuery library -->
        <script src="../web/js/jquery.rangecalendar.js"></script><!-- jQuery library -->
        <script src="../web/js/calendario.js"></script>
        <script src="../web/js/menu.js"></script>



    </body>

</html>