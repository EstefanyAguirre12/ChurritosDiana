<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Restaurante</title>
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
      <div class="right_col" role="main" style="min-height: 806px;">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Registro de ordenes restaurante</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Listado ordenes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="datatable-checkbox_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="dataTables_length" id="datatable-checkbox_length">
                          <label>Mostrando
                            <select name="datatable-checkbox_length" aria-controls="datatable-checkbox" class="form-control input-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select> Por</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div id="datatable-checkbox_filter" class="dataTables_filter">
                          <label>Busquedad:
                            <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-checkbox">
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Cliente</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Mesa</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Productos</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Total</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Fecha</th>
                          </thead>
                          <tbody>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td >Nombres e</td>
                              <td >mesa 1</td>
                              <td >                                
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/plato1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>PLato de pollo</strong></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-55">
                                  <div class="thumbnail">
                                    <div class="image view view-first">
                                      <img style="width: 100%; display: block;" src="img/bebida1.jpg" alt="image">
                                    </div>
                                    <div class="caption">
                                      <p><strong>Jugo de fresa</strong></p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td >$10.25</td>
                              <td >25/03/2018</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="dataTables_info" id="datatable-checkbox_info" role="status" aria-live="polite">Mostrado 10 de 57 registros</div>
                      </div>
                      <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-checkbox_paginate">
                          <ul class="pagination">
                            <li class="paginate_button previous disabled" id="datatable-checkbox_previous">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="0" tabindex="0">Anterior</a>
                            </li>
                            <li class="paginate_button active">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="1" tabindex="0">1</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="2" tabindex="0">2</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="3" tabindex="0">3</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="4" tabindex="0">4</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="5" tabindex="0">5</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="6" tabindex="0">6</a>
                            </li>
                            <li class="paginate_button next" id="datatable-checkbox_next">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="7" tabindex="0">Siguiente</a>
                            </li>
                          </ul>
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