<!-- page content -->
<div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
            <h3>Proceso de pago</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel"> 
                  <div class="x_content">
                    <div class="x_title">
                      <h2>Proceso de pago <small>paso 3</small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <?php print("
                      <a href='p2o3reservacion_nueva.php?cliente=$id_cliente ' class=' buttonDisabled btn btn-primary'>Anterior</a>
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
                          <a href="#paso3" class="selected" isdone="0" rel="3">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                        <li>
                          <a href="#paso4" class="disabled" isdone="0" rel="4">
                            <span class="step_no">4</span>
                          </a>
                        </li>
                      </ul>
                        <div class="stepContainer"><div id="step-11" class="content" >
                          <h2 class="StepTitle">Tipo de cliente</h2> 
                              <div class="x_content">
                                <div class="table-responsive">
                                  <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                      <tr class="headings">
                                        <th class="column-title">Nombres cliente </th>
                                        <th class="column-title">Codigo de cuenta </th>
                                        <th class="column-title">Fecha de creacion </th>
                                        <th class="column-title">Estado</th>
                                        <th class="column-title">Acumulado</th>
                                        <th class="column-title no-link last"><span class="nobr">Accion</span></th>
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
                                                <td>$row[1]</td>
                                                <td>
                                                <button  class'btn btn-dark btn-xs'>$row[2]</button></td>
                                                <td>$row[3]</td>
                                                <td>
                                                       <button  class='btn btn-success btn-xs'>Activa</button>
                                                </td>       
                                                 <td>
                                                 <button  class='btn btn-info btn-xs'>$row[5]</button>
                                                  
                                                 </td>                         
                                                <td>
                                                  <a href='p4o3reservacion_nueva.php?cliente=$id_cliente[0]&cuenta=$row[2]' type='button' class='btn btn-primary'>
                                                    <i class='fa fa-plus-circle'></i>
                                                  </a>
                                                </td>
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