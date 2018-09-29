<!-- page content -->
      <div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>listado de habitaciones</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Habitaciones</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                      </a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                <div class="cards"> 
                <?php
                    foreach($habitaciones as $habitacion){
                      print("

                        <div class=' card [ is-collapsed ] '>
                          <div class='card__inner [ js-expander ]'>
                            <span>Habitacion N:$habitacion[NumeroHabitacion] </span>
                            <br>
                            <span>Estado:$habitacion[Estado]</span>
                            <br>
                            <i class='fas fa-calendar-alt'></i>
                          </div>
                          <div class='card__expander'>
                            <i class='fa fa-close [ js-collapser ]'></i>
                              <h3 >Precio:$habitacion[Precio]  <br> <br> Capacidad:$habitacion[Capacidad]  </h3>
        
                          </div>
                      </div>
                      "); 
                  }   
                ?>
              </div>         

                  </div>
                </div>
              </div>
            </div>
          </div>
     
        </div>
      </div>
<!-- /page content -->