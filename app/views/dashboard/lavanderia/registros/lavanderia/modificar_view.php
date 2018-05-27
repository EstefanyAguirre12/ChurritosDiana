<div class="right_col" role="main" class="estilo_righ">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Mantenimiento de Lavanderia</h3>
    </div>
  </div>
  <div class="clearfix"></div>  
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Modificar Objeto</h2>
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
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre*:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name myInput" name="nom" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getNombre()) ?>" required/>
          </div>
        </div>
        <div class="form-group">
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Color*:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" name="col" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getColor()) ?>" required/>
          </div>
        </div>
        <div class="form-group">
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad*:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" name="cant" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" value="<?php print($dato->getCantidad()) ?>" required/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria:*</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <?php
              Page::showSelect("", "cat", $dato->getIdCategoria(), $dato->getCategoria());
            ?>
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Material:*</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <?php
              Page::showSelect("", "mat", $dato->getIdMaterial(), $dato->getMaterial());
            ?>
          </div>
        </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <a href="indexlavanderia.php" class="btn btn-primary" type="button">Cancelar</a>
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