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
                        <h2 class="StepTitle">Seleccione el tipo de productos</h2>  
                        <form autocomplete= 'off'   method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left"> 
                            <br>
                              <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Mesas*</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php
                                      Page::showSelect("", "mesa", $nueva_orden->getIdmesa(), $nueva_orden->getMesas());
                                    ?>
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cantidad de mesas:
                                  <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                  <input type="number"  name ="cantidadM" class="form-control has-feedback-left" id="inputSuccess2" placeholder="">
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Sillas*</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php
                                      Page::showSelect("", "sillas", $nueva_orden->getIdsila(), $nueva_orden->getSillas());
                                    ?>
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cantidad de sillas:
                                  <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                  <input type="number"  name ="cantidadS" class="form-control has-feedback-left" id="inputSuccess2" placeholder="">
                                </div>
                              </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha:
                                  <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                  <input type="date"  name ="fecha" class="form-control has-feedback-left"  placeholder="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hora inicio:
                                  <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                  <input type="time"  name ="hinicio" class="form-control has-feedback-left"  placeholder="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hora Fin:
                                  <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                  <input type="time"  name ="hfin" class="form-control has-feedback-left"  placeholder="">
                                </div>
                              </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="reset">Limpiar</button>
                                <button type="submit" name="enviar" class="btn btn-success">Aceptar</button>
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