
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
                  <h2>Nueva Reservas </h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form   method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left"> 
                    <br>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Sala de conferencia:*</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php
                              Page::showSelect("", "sala", $dato->getIdsala(), $dato->getSalas());
                            ?>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Mesas*</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php
                              Page::showSelect("", "mesa", $dato->getIdmesa(), $dato->getMesas());
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
                              Page::showSelect("", "sillas", $dato->getIdsila(), $dato->getSillas());
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
    <!-- /page content -->