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
                          <a href="#paso3" class="selected" isdone="0" rel="3">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                        <li>
                          <a href="#paso4" class="disabled" isdone="0" rel="4">
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
                        <h2 class="StepTitle">Seleccione tipo de Numero de cuenta</h2>  
                        <div class="animated lipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="tile-stats">
                                <div class="count">Crear nueva N° de cuenta total.</div>
                                <div class="ln_solid"></div>
                                <h3>se crea nueva cuenta de pago.</h3>
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <?php
                                        print("
                                            <a href='p3o1nueva_orden.php?cliente=$id_cliente' class='btn btn-info btn-lg'>Selecionar</a>
                                        ");
                                      ?>
                                    </div>
                              </div>
                            </div>
                            <div class="animated lipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="tile-stats">
                                <div class="count">Cargar a N° cuenta</div>
                                <div class="ln_solid"></div>
                                <h3>Los cargos seran agregador a la cuenta total.</h3>
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <?php
                                        print("
                                            <a href='p3o2nueva_orden.php?cliente=$id_cliente' class='btn btn-info btn-lg'>Selecionar</a>
                                        ");
                                      ?>
                                    </div>
                              </div>
                            </div>



                      </div>
                    </div>
                    <div class="">
                          <a href="nueva_orden.php" class="buttonPrevious buttonDisabled btn btn-primary">Anterior</a>
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