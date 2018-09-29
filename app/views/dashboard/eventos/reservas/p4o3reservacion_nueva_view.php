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
                    <h2>Proceso de pago<small>paso 4</small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="">
                    <?php print("
                        <a href='p3O3reservacion_nueva.php?cliente=$id_cliente ' class=' buttonDisabled btn btn-primary'>Anterior</a>
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
                        </li>
                      </ul>
                    <div class="stepContainer"><div id="step-11" class="content" >
                          <h2 class="StepTitle">Lista de salas</h2>  
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
                                      <th class="column-title">Precio </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="even pointer">
                                        <?php
                                          // Verifica si la URL de la pagina contirne datos
                                            foreach($data1 as $row){
                                              print("
                                                </tr>
                                                <tr role='row' class='odd'>
                                                  <td>$row[0]</td>
                                                  <td>$row[1] - $row[2]</td>
                                                  <td>$row[3] - $row[4]</td>
                                                  <td>$row[5] - $row[6]</td>
                                                  <td>$row[7]</td>
                                                  <td>$.$row[8]</td>
                                              </tr>
                                              ");
                                            }
                                          ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <h2 class="StepTitle">Lista de habitaciones</h2>  
                          <div class="x_content">
                                <div class="table-responsive">
                                  <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                      <tr class="headings">
                                        <th class="column-title">N° Habitacion</th>
                                        <th class="column-title">Fechas</th>
                                        <th class="column-title">Horas </th>
                                        <th class="column-title">Precio </th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <tr class="even pointer">

                                          <?php
                                            // Verifica si la URL de la pagina contirne datos
                                              foreach($data2 as $row){
                                                print("
                                                  </tr>
                                                  <tr role='row' class='odd'>
                                                    <td>$row[0]</td>
                                                    <td>$row[1] - $row[2]</td>
                                                    <td>$row[3] - $row[4]</td>
                                                    <td>$$row[5]</td>
                                                </tr>
                                                ");
                                              }
                                            ?>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <h2 class="StepTitle">Lista de productos</h2>  
                        <div class="x_content">
                              <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                  <thead>
                                    <tr class="headings">
                                      <th class="column-title">Producto</th>
                                      <th class="column-title">Cantidad</th>
                                      <th class="column-title">Precio</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr class="even pointer">

                                        <?php
                                          // Verifica si la URL de la pagina contirne datos
                                            foreach($data3 as $row){
                                              print("
                                                </tr>
                                                <tr role='row' class='odd'>
                                                  <td>$row[0]</td>
                                                  <td>$row[2]</td>
                                                  <td>$$row[1]</td>   
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
                       <h2 class="StepTitle">Detalle</h2> 
                              <div class="x_content">
                                <div class="table-responsive">
                                  <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                      <tr class="headings">
                                        <th class="column-title">Nombres cliente </th>
                                        <th class="column-title">Codigo de cuenta </th>
                                        <th class="column-title">Fecha de creacion </th>
                                        <th class="column-title">Estado</th>
                                        <th class="column-title">Hotel</th>
                                        <th class="column-title">Restaurante</th>
                                        <th class="column-title">Eventos</th>
                                        <th class="column-title">Acumulado Total</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <tr class="even pointer">
                                      <?php
                                        // Verifica si la URL de la pagina contirne datos
                                          foreach($data4 as $row){
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
                                                $$row[6]
                                                </td>   
                                                <td>
                                               $$row[7]
                                                </td>   
                                                <td>
                                               $$row[8]
                                                </td>       
                                                 <td>
                                                 $$row[5]
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
                        <h2 class="StepTitle">Pago</h2>
                          <form autocomplete= 'off' method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Dinero*:</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" name="dinero" class="form-control col-md-7 col-xs-12 validate" data-inputmask="'mask' : '999.999'"  name="middle-name" required/>
                              </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <a  class="btn btn-primary">Imprimir</a>
                              <button type="submit" name="guardar" class="btn btn-success">Guardar</button>
                             
                              </div>
                            </div>
                          </form>
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