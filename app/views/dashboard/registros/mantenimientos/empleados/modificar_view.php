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
                  <h2>Modificar Empleados</h2>
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
                  <form method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nombres*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name  " name="nom" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getNombre()) ?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Apellidos*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name  " name="ap" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getApellido()) ?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">DUI*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name  " name="dui" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getDui()) ?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefono*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name  " name="tel" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getTelefono()) ?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Dirección*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name  " name="dir" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getDireccion()) ?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Foto*:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="foto" class="form-control col-md-7 col-xs-12 validate form-control-file" aria-describedby="fileHelp" value="<?php print($dato->getFoto()) ?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo:*</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php
                          Page::showSelect("", "car", $dato->getIdcargo(), $dato->getCargo());
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
                        <a href="indexempleados.php" class="btn btn-primary" type="button">Cancelar</a>
                        <button type="submit" name="modificar" class="btn btn-success">Modificar</button>
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