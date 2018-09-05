      <!-- page content -->
      <div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Reservas</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                  <h2>Modificar Reservas </h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form autocomplete= 'off'   method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left"> 
                    <br>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Habitacion:*</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php
                              Page::showSelect("", "habitacion", $dato->getIdhabitacion(), $dato->gethabitacion());
                            ?>
                          </div>
                      </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha inicio:
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="date" value="<?php print($dato->getFechainicio()) ?>" name ="fechai" class="form-control has-feedback-left"  placeholder="" value="<?php print($dato->getFechainicio()) ?>" required/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha fin:
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="date" value="<?php print($dato->getFechainicio()) ?>" name ="fechaf" class="form-control has-feedback-left"  placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hora inicio:
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="time" value="<?php print($dato->getHorainicio()) ?>" name ="hinicio" class="form-control has-feedback-left"  placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hora Fin:
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="time" value="<?php print($dato->getHorafin()) ?>" name ="hfin" class="form-control has-feedback-left"  placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta cliente:*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php
                            Page::showSelect("", "cuenta", $dato->getIdcuenta(), $dato->getCuentas());
                          ?>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->