<!-- page content -->
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
                  <h2>Registros de Entes</h2>
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
                      <form method='post'>
                        <div class="col-sm-6">
                          <div id="datatable-checkbox_filter" class="dataTables_filter">
                            <label>Busquedad:
                              <input type="search" name="busqueda" class="form-control input-sm validate" placeholder="Nombre/DUI" aria-controls="datatable-checkbox" /required>
                            </label>
                            <button type="submit" name="buscar" class="btn btn-round btn-info">
                              <i class="fas fa-search"></i>
                            </button>                        
                          </div>
                        </div>
                      </form> 
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nombres</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Apellidos</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">DUI</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Telefono</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Correo</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Tipo</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Genero</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Editar</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Eliminar</th>
                          </thead>
                          <tbody>
                            <?php
                              foreach($data as $row){
                                print("
                                  <tr role='row' class='odd'>
                                    <td>$row[Nombres]</td>
                                    <td>$row[Apellidos]</td>
                                    <td>$row[DocIdentidad]</td>
                                    <td>$row[Telefono]</td>
                                    <td>$row[Correo]</td>
                                    <td>$row[TipoEnte]</td>
                                    <td>$row[NombreGenero]</td>
                                    <td>
                                      <a href='modificarentes.php?id=$row[IdEnte]' type='button' class='btn btn-round btn-info'>
                                        <i class='far fa-edit'></i>
                                      </a>
                                    </td>
                                    <td>
                                      <a href='eliminarentes.php?id=$row[IdEnte]' type='button' class='btn btn-round btn-danger'>
                                        <i class='far fa-trash-alt'></i>
                                      </a>
                                    </td>
                                  </tr>
                                ");
                              }
                            ?>	               
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
                    <div class="text-right">
                      <a href="agregarentes.php" type="submit" class="btn btn-success">Agregar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>  
      </div>  
            