      <div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Mantenimiento de Registros</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Agregar nuevo Usuario</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                      </a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form autocomplete= 'off' method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Usuario*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" name="usu" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getNombre()) ?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Clave*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" name="c1" class="form-control col-md-7 col-xs-12 validate" type="password" name="middle-name" value="<?php print($dato->getClave()) ?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Confirmar Clave*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" name="c2" class="form-control col-md-7 col-xs-12 validate" type="password" name="middle-name" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Empleado:*</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php
                          Page::showSelect("", "em", $dato->getIdempleado(), $dato->getEmpleado());
                        ?>

                          <div class="g-recaptcha" data-sitekey="6LerlG0UAAAAAJaIcgt_d8LP3S61LEsUDVHXp0BJ"></div>

                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <a href="indexusuarios.php" class="btn btn-primary" type="button">Cancelar</a>
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
<!-- /page content -->
