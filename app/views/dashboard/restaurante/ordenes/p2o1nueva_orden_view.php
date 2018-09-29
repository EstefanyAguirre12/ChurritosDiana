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
                      <h2>Nueva orden <small>paso 2</small></h2>
                      <div class="clearfix"></div>
                  </div>
                  <div class="">
                          <a href="nueva_orden.php" class="buttonPrevious buttonDisabled btn btn-primary">Anterior</a>
                    </div>
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
                        <ul class="list-unstyled wizard_steps anchor">
                          <li>
                            <a href="#paso1" class="done" isdone="1" rel="1">
                              <span class="step_no">1</span>
                            </a>
                          </li>
                          <li>
                            <a href="#paso2" class="selected" isdone="0" rel="2">
                              <span class="step_no">2</span>
                            </a>
                          </li>
                          <li>
                            <a href="#paso3" class="disabled" isdone="0" rel="3">
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
                            <h2 class="StepTitle">Registrar nuevo cliente</h2>
                              <form autocomplete= 'off' method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">
                                <div class="form-group">
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nombres*:</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" name="nom" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getNombre()) ?>" required/>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Apellidos*:</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" name="ap" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getApellido()) ?>" required/>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">DUI*:</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" name="dui" class="form-control col-md-7 col-xs-12 validate" data-inputmask="'mask' : '99999999-9'" name="middle-name" value="<?php print($dato->getDocIdentidad()) ?>" required/>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefono*:</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" name="tel" class="form-control col-md-7 col-xs-12 validate" data-inputmask="'mask' : '9999-9999'" name="middle-name" value="<?php print($dato->getTelefono()) ?>" required/>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Correo*:</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" name="cor" class="form-control col-md-7 col-xs-12 validate" type="email" name="middle-name" value="<?php print($dato->getCorreo()) ?>" required/>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo:*</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php
                                      Page::showSelect("", "tip", $dato->getIdTipo(), $dato->getTipo());
                                    ?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Genero:*</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php
                                      Page::showSelect("", "gen", $dato->getIdgenero(), $dato->getGenero());
                                    ?>
                                  </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <a href="indexentes.php" class="btn btn-primary" type="button">Cancelar</a>
                                  <button type="submit" name="guardar" class="btn btn-success">Guardar</button>
                                  </div>
                                </div>
                              </form> 
                        </div>
                    </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
<!-- /page content -->