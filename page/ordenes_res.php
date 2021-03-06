<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Registros empleados</title>
  <?php 
        require_once("php/estilos.php");
       ?>
</head>

<body class="nav-md">
  <div class="container body">

    <div class="main_container">
      <?php 
        require_once("php/panel.php");
       ?>

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
                <div class="x_title">
                  <h2>Nueva ordenes restaurante </h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br>
                  <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre cliente:</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control">
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>
                          <option value="">Lorem, ipsum dolor.</option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="" aria-describedby="inputSuccess2Status4">
                              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                              <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <h3>Productos </h3>
                  </form>
                  <br>
                  <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel">
                      <a class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne">
                        <h4 class="panel-title bg-rojo1">Menu bebidad</h4>
                      </a>
                      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false"
                        style="height: 0px;">
                        <div class="panel-body">
                          <div class="row">
                            <p>Seleccione las diferentes bebidadas a comprar</p>
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img class="estilo_stay" src="img/bebida1.jpg" alt="image">
                                  <div class="mask">
                                    <p>$ 5.25</p>
                                    <div class="tools tools-bottom">
                                      <a href="#">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                      <a href="#">
                                        <i class="fa fa-times"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Plato 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img class="estilo_stay" src="img/bebida1.jpg" alt="image">
                                  <div class="mask">
                                    <p>$ 5.25</p>
                                    <div class="tools tools-bottom">
                                      <a href="#">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                      <a href="#">
                                        <i class="fa fa-times"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Plato 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img class="estilo_stay" src="img/bebida1.jpg" alt="image">
                                  <div class="mask">
                                    <p>$ 5.25</p>
                                    <div class="tools tools-bottom">
                                      <a href="#">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                      <a href="#">
                                        <i class="fa fa-times"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Plato 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img class="estilo_stay" src="img/bebida1.jpg" alt="image">
                                  <div class="mask">
                                    <p>$ 5.25</p>
                                    <div class="tools tools-bottom">
                                      <a href="#">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                      <a href="#">
                                        <i class="fa fa-times"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Plato 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        <h4 class="panel-title bg-rojo1">Menu plato</h4>
                      </a>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                        <div class="panel-body">
                          <div class="row">
                            <p>Seleccione las diferentes platos a comprar</p>
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img class="estilo_stay" src="img/plato1.jpg" alt="image">
                                  <div class="mask">
                                    <p>$ 5.25</p>
                                    <div class="tools tools-bottom">
                                      <a href="#">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                      <a href="#">
                                        <i class="fa fa-times"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Plato 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img class="estilo_stay" src="img/plato1.jpg" alt="image">
                                  <div class="mask">
                                    <p>$ 5.25</p>
                                    <div class="tools tools-bottom">
                                      <a href="#">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                      <a href="#">
                                        <i class="fa fa-times"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Plato 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img class="estilo_stay" src="img/plato1.jpg" alt="image">
                                  <div class="mask">
                                    <p>$ 5.25</p>
                                    <div class="tools tools-bottom">
                                      <a href="#">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                      <a href="#">
                                        <i class="fa fa-times"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Plato 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img class="estilo_stay" src="img/plato1.jpg" alt="image">
                                  <div class="mask">
                                    <p>$ 5.25</p>
                                    <div class="tools tools-bottom">
                                      <a href="#">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                      <a href="#">
                                        <i class="fa fa-times"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Plato 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <h3>Total </h3>
                  </form>
                  <br>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Producto</th>
                          <th>Cantidad</th>
                          <th>Precio</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>3</td>
                          <td>#5.25</td>
                          <td>#15.10</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>3</td>
                          <td>#5.25</td>
                          <td>#15.10</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>3</td>
                          <td>#5.25</td>
                          <td>#15.10</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button class="btn btn-primary" type="reset">Limpiar</button>
                    <button type="submit" class="btn btn-success">Aceptar</button>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo odit eligendi minima nemo, quod possimus dolore vero quam consectetur
      eveniet asperiores ad praesentium officiis dolorem non molestias eos facere accusamus?
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>
  <?php 
        require_once("php/scrips.php");
       ?>
</body>

</html>