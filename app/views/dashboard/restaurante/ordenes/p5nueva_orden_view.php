<!-- page content -->
<div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Serivicios restaurante</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel"> 
                  <div class="x_content">
                    <div class="x_title">
                      <h2>Nueva orden <small>paso 3</small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <?php print("
                        <a href='p4nueva_orden.php?cliente=$id_cliente&cuenta=$cuenta' class=' buttonDisabled btn btn-primary'>Anterior</a>
                    ");
                    ?>
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
                          <a href="#paso4" class="done" isdone="0" rel="4">
                            <span class="step_no">4</span>
                          </a>
                        </li>
                        <li>
                          <a href="#paso5" class="selected" isdone="0" rel="3">
                            <span class="step_no">5</span>
                          </a>
                        </li>
                      </ul>
                    <div class="stepContainer"><div id="step-11" class="content" >
                        <h2 class="StepTitle">Lista de productos selecinados</h2>  
                        <div class="x_content">
                              <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                  <thead>
                                    <tr class="headings">
                                      <th class="column-title">Producto</th>
                                      <th class="column-title">Precio</th>
                                      <th class="column-title">Cantidad </th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr class="even pointer">

                                        <?php
                                          // Verifica si la URL de la pagina contirne datos
                                            foreach($data as $row){
                                              print("
                                                </tr>
                                                <tr role='row' class='odd'>
                                                  <td>$row[0]</td>
                                                  <td>$row[1]</td>
                                                  <td>$row[2]</td>   
                                              </tr>
                                              ");
                                            }
                                          ?>
                                    </tr>
                                  </tbody>
                                </table>
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