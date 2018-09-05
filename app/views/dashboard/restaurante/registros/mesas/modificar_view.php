<div class="right_col" role="main" class="estilo_righ">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Mantenimiento de Restaurante</h3>
    </div>
  </div>
  <div class="clearfix"></div>  
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Modificar Mesa</h2>
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
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Numero Mesa*:</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name  " name="num" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getNumeromesa()) ?>" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Capacidad*:</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" name="cap" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getCapacidad()) ?>" required/>
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <a href="indexmesa.php" class="btn btn-primary" type="button">Cancelar</a>
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