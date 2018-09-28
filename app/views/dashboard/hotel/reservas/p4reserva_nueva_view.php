<!-- page content -->
<div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
            <h3>Nueva reserva hotel</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel"> 
                  <div class="x_content">
                    <div class="x_title">
                    <h2>Nueva reserva <small>paso 4</small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="">
                    <?php print("
                        <a href='p3reserva_nueva.php?cliente=$id_cliente ' class=' buttonDisabled btn btn-primary'>Anterior</a>
                        <a href='p5reserva_nueva.php?cliente=$id_cliente&cuenta=$cuenta' class='buttonPrevious buttonDisabled btn btn-success'>Finalizar</a>
                    ");
                    ?>
                    </div>
                    <!-- Tabs -->
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
                      <ul class="list-unstyled wizard_steps anchor">
                        <li>
                          <a href="#paso1" class="done" isdone="1" rel="1">
                            <span class="step_no">1</span>
                          </a>
                        </li>
                        <li>
                          <a href="#paso2" class="done" isdone="0" rel="2">
                            <span class="step_no">2</span>
                          </a>
                        </li>
                        <li>
                          <a href="#paso3" class="done" isdone="0" rel="3">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                        <li>
                          <a href="#paso4" class="selected" isdone="0" rel="4">
                            <span class="step_no">4</span>
                          </a>
                        </li>
                        <li>
                          <a href="#paso5" class="disabled" isdone="0" rel="3">
                            <span class="step_no">5</span>
                          </a>
                        </li>
                      </ul>
                    <div class=""><div id="step-11" class="content" >
                        <h2 class="">Seleccione la habitacion</h2>  
                        <div class="bs-docs-section">
                          <div class="bs-glyphicons">
                          <ul class='bs-glyphicons-list'>
                          <?php
                          // Verifica si la URL de la pagina contirne datos
                            foreach($data as $row){
                              print("
                              
                                  <li>
                                    <span class='' aria-hidden='true'></span>
                                    <h3 >$row[1]</h3>
                                    <h5 class='glyphicon-class'>Capacidad:$row[2] $:$row[3]</h5>
                                    <a  href='p4o1reserva_nueva.php?cliente=$id_cliente&cuenta=$cuenta&habitacion=$row[0]' class='btn btn-primary btn-xs'>selecionar</a>
                                  </li>
                               
                              ");
                            }
                          ?>
                            </ul>
                          </div>
                        </div>

                    </div>

                    <!-- End SmartWizard Content -->

                  </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
<!-- /page content -->