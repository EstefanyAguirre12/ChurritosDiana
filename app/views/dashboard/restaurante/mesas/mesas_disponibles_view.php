      <!-- page content -->
      <div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Mesas</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Listado mesas </h2>
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
                  <?php
                    foreach($mesas as $mesa){
                      print("
                      <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                          <div class='tile-stats'>
                            <div class='icon'><i class='fa fa-caret-square-o-right'></i>
                            </div>
                            <div class='count'> 
                              <h2>
                              Numero:$mesa[NumeroMesa] 
                              </h2>
                              <h4>
                              </h4>
                            </div>
                            <h3 class='red'>Capacidad:$mesa[Capacidad] </h3>

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
      <!-- /page content -->