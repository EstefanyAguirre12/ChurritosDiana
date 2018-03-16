<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>BAROLO</title>

        <!-- Stylesheets -->
        <link rel='stylesheet prefetch' href='../web/css/megayg.css'>
        <link rel="stylesheet" href="../web/css/reset.min.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="../web/css/color-default.css"/><!-- default template color styles -->   
        <link rel="stylesheet" href="../web/css/responsive.css"/><!-- responsive styles -->
        <link rel="stylesheet" href="../web/css/calendario.css" />
        <link rel="stylesheet" href="../web/css/style.css"/><!-- template styles -->

    
        <!-- Google Web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>


    </head>

    <body>

    <header>       
            <?php include("components/menu.php") ?>
        </header>

        <div class="font-cover" id="headparallax1">
            <div class="page-content custom-img-background dark custom-col-padding mb-100">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 centered">
                        <div class="custom-heading style-1">
                            <h2>
                                <span>Hotel Barolo</span>
                            </h2>
                            <h2>RESERVA DE CONFERENCIA</h2>
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
                    <h3>salones disponibles</h3>
                </div>
                <!-- .custom-heading.style-2 end -->
                <form class="buttons">
                    <label>
                        <input type="checkbox" name="check">
                        <h3 class="label-text">Salon 1
                        </h3>
                        </input>
                    </label>
                    <label>
                        <input type="checkbox" name="check">
                        <h3 class="label-text">Salon 2
                        </h3>
                        </input>
                    </label>
                    <label>
                        <input type="checkbox" name="check">
                        <h3 class="label-text">Salon 3
                        </h3>
                        </input>
                    </label>
                    <label>
                        <input type="checkbox" name="check">
                        <h3 class="label-text">Salon 3
                        </h3>
                        </input>
                    </label>
                </form>
            </div>
        </section>


        <section id="section-main" class="section-reservation">
            <div class="w800">
                <div class="custom-heading style-1 altura">
                    <h3>
                        <span>Fecha</span>
                    </h3>
                </div>
                <!-- .custom-heading.style-2 end -->
                <form action="#">
                    <div id="rcal"></div>
                    <div class="spacer"></div>
                    <div class="actions"></div>
                </form>
            </div>
        </section>



        <section id="section-main" class="section-reservation">
            <div class="centrar">
                <div class="col-md-12 centered ">
                    <div class="custom-heading style-1 altura">
                        <h3>
                            <span>Hora</span>
                        </h3>
                    </div>
                    <!-- .custom-heading.style-2 end -->
                    <div id="time-range">
                        <p>
                            <span class="slider-time">9:00 AM</span> -
                            <span class="slider-time2">5:00 PM</span>
                        </p>
                        <div class="sliders_step1">
                            <div id="slider-range"></div>
                        </div>
                </div>
                </div>
            </div>
        </section>




        <section id="section-main" class="section-reservation altura">
            <div class="w800"> 
                <!-- .custom-heading.style-2 end -->
                <div class="col-md-12 centered ">
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="custom-heading style-1 altura">
                                <h3>
                                    <span>Personas</span>
                                </h3>
                            </div>
                            <!-- .custom-heading.style-2 end -->
                            <div class="plusminus horiz ">
                                <button></button>
                                <input type="number" name="productQty" value="1" min="1" max="600">
                                <button></button>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>



        <section id="section-main" class="section-reservation altura">
            <div class="w800">
                <div class="custom-heading style-1 altura">
                    <h3>Informacion personal</h3>
                </div>
                <!-- .custom-heading.style-2 end -->

                <div class="col-md-12 centered ">

                    <div class="row">
                        <!--Grid column-->


                        <div class="col-md-6">
                            <div class="md-form">
                                <label>
                                    <span>Nombres</span>
                                    <input type="text" />
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <label>
                                    <span>Apellidos</span>
                                    <input type="text" />
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <label>
                                    <span>Telfono</span>
                                    <input type="text" />
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <label>
                                    <span>Documento de indentidad</span>
                                    <input type="text" />
                                </label>
                            </div>

                        </div>

                    </div>

                    <a class="discover_more has_transition_400 altura" href="#">RESERVAR</a>
                </div>
            </div>
        </section>

        <footer class="footer1">
            <?php include("components/footer.php") ?>
        </footer>
        <script src="../web/js/menu.js"></script>

        <script src="../web/js/jquery.min.js"></script><!-- jQuery library -->

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js'></script>
        <script src='https://www.jqueryscript.net/demo/jQuery-Plugin-For-Date-Range-Selector-Range-Calendar/js/jquery.rangecalendar.js'></script>
        <script src="../web/js/calendario.js"></script>
        <script src="../web/js/timepicker.js"></script>
        <script src="../web/js/numberpicker.js"></script>




    </body>

</html>