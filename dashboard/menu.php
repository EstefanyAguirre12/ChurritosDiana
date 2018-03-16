<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Menu restaurante</title>
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
                  <h2>Menus </h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="well">
                    <div class="clearfix"></div>
                    <h3>Menu 1</h3>
                    <div class="clearfix"></div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Combo</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Productos</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Precio</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Añadir</th>
                          </thead>
                          <tbody>
                            <tr role="row" class="odd">
                              <td>combo 1</td>
                              <td>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img class="estilo_stay" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p>
                                        <strong>PLato de pollo</strong>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img class="estilo_stay" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p>
                                        <strong>Jugo de fresa</strong>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>$3.25</td>
                              <td>
                                <button type="button" class="btn btn-round btn-info">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="well">
                    <div class="clearfix"></div>
                    <h3>Menu 2</h3>
                    <div class="clearfix"></div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Combo</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Productos</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Precio</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Añadir</th>
                          </thead>
                          <tbody>
                            <tr role="row" class="odd">
                              <td>combo 1</td>
                              <td>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img class="estilo_stay" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p>
                                        <strong>PLato de pollo</strong>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img class="estilo_stay" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p>
                                        <strong>Jugo de fresa</strong>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>$3.25</td>
                              <td>
                                <button type="button" class="btn btn-round btn-info">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="well">
                    <div class="clearfix"></div>
                    <h3>Menu 3</h3>
                    <div class="clearfix"></div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Combo</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Productos</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Precio</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Añadir</th>
                          </thead>
                          <tbody>
                            <tr role="row" class="odd">
                              <td>combo 1</td>
                              <td>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img class="estilo_stay" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p>
                                        <strong>PLato de pollo</strong>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img class="estilo_stay" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p>
                                        <strong>Jugo de fresa</strong>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>$3.25</td>
                              <td>
                                <button type="button" class="btn btn-round btn-info">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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