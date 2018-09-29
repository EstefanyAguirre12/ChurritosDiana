<!-- page content -->
<div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
            <h3>Nueva reserva eventos</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                  <div class="x_content">
                    <div class="x_title">
                    <h2>Nueva reserva <small>paso 5</small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="">
                      <?php print("
                        <a href='p4reservacion_nueva.php?cliente=$id_cliente&cuenta=$cuenta ' class=' buttonDisabled btn btn-primary'>Anterior</a>
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
                                      <th class="column-title">Sala</th>
                                      <th class="column-title">Mesa,cantidad</th>
                                      <th class="column-title">Sillas,cantidad </th>
                                      <th class="column-title">Horas </th>
                                      <th class="column-title">Fecha </th>
                                      <th class="column-title">Costo  </th>
                                      <th class="column-title">Eliminar </th>
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
                                                  <td>$row[1] - $row[2]</td>
                                                  <td>$row[3] - $row[4]</td>
                                                  <td>$row[5] - $row[6]</td>
                                                  <td>$row[7]</td>
                                                  <td>$row[8]</td>
                                                  <td>
                                                  <form autocomplete= 'off' method='post' id='demo-form2' data-parsley-validate='' class='form-horizontal form-label-left'>
                                                      <input id='middle-name' name='IdSala' class='form-control col-md-7 col-xs-12 validate hide' type='text' name='middle-name' value='$row[9]' required/>
                                                        <button type='submit'  name ='eliminar' class='btn btn-round btn-danger  '>  <i class='fas fa-archive'></i></button>
                                                  </form>
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
                    <!-- End SmartWizard Content -->

                  </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
<!-- /page content -->
