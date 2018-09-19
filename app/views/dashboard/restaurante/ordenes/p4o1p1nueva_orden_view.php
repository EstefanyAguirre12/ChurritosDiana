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
                    </div
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
                    <div class="stepContainer"><div id="step-11" class="content" >
                        <h2 class="StepTitle">Agrege producto</h2>  


                                <form autocomplete= 'off' method='post' id='demo-form2' data-parsley-validate='' class='form-horizontal form-label-left'>
                                  <div class='animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12'>
                                        <div class='tile-stats'>
                                        <div class='count'><?php print($nueva_orden->getpnombre()) ?></div>
                                        <div class='ln_solid'></div>
                                        <h3>Precio: $ <?php print($nueva_orden->getpprecio()) ?></h3>
                                            <div class='form-group'>
                                              <label for='middle-name' class='control-label col-md-3 col-sm-3 col-xs-12'>Cantidad*:</label>
                                              <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input id='middle-name' name='cantidad' class='form-control col-md-7 col-xs-12 validate' type='text' name='middle-name' value='<?php print($nueva_orden->getCantidad()) ?>' required/>
                                                 </div>
                                            </div>
                                            <div class='col-md-9 col-sm-9 col-xs-12 col-md-offset-3'>
                                              <button type="submit"  name ='guardar' class='btn btn-info btn-lg'>Selecionar</button>
                                            </div>
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