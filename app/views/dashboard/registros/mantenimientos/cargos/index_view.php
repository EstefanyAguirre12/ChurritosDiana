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
                  <h2>Registros de Cargos</h2>
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
                              <input type="search" name="busqueda" class="form-control input-sm validate" placeholder="Cargo" aria-controls="datatable-checkbox" /required>
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
                              <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Cargo</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Descripcion</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Editar</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Eliminar</th>
                          </thead>
                          <tbody>
                            <?php
                              foreach($data as $row){
                                // Verifica si la URL de la pagina contirne datos
                              $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                              $no=1;
                                print("
                                  <tr role='row' class='odd'>
                                    <td>$row[NombreCargo]</td>
                                    <td>$row[Descripcion]</td>
                                    <td>
                                      <a href='modificarcargos.php?id=$row[IdCargo]' type='button' class='btn btn-round btn-info'>
                                        <i class='far fa-edit'></i>
                                      </a>
                                    </td>
                                    <td>
                                      <a href='eliminarcargos.php?id=$row[IdCargo]' type='button' class='btn btn-round btn-danger'>
                                        <i class='far fa-trash-alt'></i>
                                      </a>
                                    </td>
                                  </tr>
                                ");
                                //Para que cuente cuantos datos existen
                                $no++;
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
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center">
                              <?php
                              if($page == 1) //Si la pagina es la primera que desabilite el boton de primera y prev.
                              {
                              ?>
                                  <li class="page-item disabled"><a class="page-link" href="#">Primera</a></li>
                                  <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                              <?php
                              }
                              else
                              {
                                  $link_prev = ($page > 1) ? $page -1 : 1; //Si la pagina no es la primera que hablite el boton primera
                              
                              ?>
                                  <li class="page-item"><a class="page-link" href="indexcargos.php?page=1">Primera</a></li>
                                  <li class="page-item"><a class="page-link" href="indexcargos.php?page=<?php echo $link_prev;?>">&laquo;</a></li>
                              <?php
                              }
                              ?>

                              <!--Numeros-->
                              <?php
                              $dato = new Cargos;

                              //Esta consulta calcula la cantidad de datos
                              $cuenta = $dato->countCargos();

                              //Los datos que mostrara por cada pagina
                              $limit = 1;

                              //Calcula el numero de datos que se han llamado y lo divide entre el limite para generar los numero que tendra la paginacion
                              $numero_pag = ceil($cuenta['Numero'] / $limit);
                              $cant_numero = 3;//La cantidad de enlaces antes y despues de la pagina activa
                              $inicio_numero = ($page > $cant_numero) ? $page - $cant_numero : 1;//Para el enlace inicial
                              $fin_numero = ($page < ($numero_pag - $cant_numero)) ? $page + $cant_numero : $numero_pag;//Para el numero de enlace final

                              for($i = $inicio_numero; $i <= $fin_numero; $i++)
                              {
                                  $link_activo = ($page == $i) ? 'active' : '';
                                  ?>
                                  <!--Se generan los enlaces de la paginacion-->
                                  <li class="page-item <?php echo $link_activo;?>"><a class="page-link" href="indexcargos.php?page=<?php echo $i;?>"><?php echo $i?></a></li>
                                  <?php
                              }

                              ?>

                              <!--Adelante y atras-->
                              <?php
                              //Si la pagina es igual al numero de enlaces, se deshabilitara el enlace next
                              //Esto significa que la pagina es la ultima
                              if($page == $numero_pag)//Si es la ultima pagina
                              {
                                  ?>
                                  <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
                                  <li class="page-item disabled"><a class="page-link" href="#">Ultima</a></li>
                                  <?php
                              }else
                              {
                                  $link_activo = ($page < $numero_pag) ? $page + 1 : $numero_pag;//Si no es la ultima pagina
                                  ?>
                                  <li class="page-item"><a class="page-link" href="indexcargos.php?page=<?php echo $link_activo;?>">&raquo;</a></li>
                                  <li class="page-item"><a class="page-link" href="indexcargos.php?page=<?php echo $numero_pag?>">Ultima</a></li>
                                  <?php
                              }
                              ?>
                          </ul>
                        </nav>
                      </div>
                    </div>
                    <div class="text-right">
                      <a href="agregarcargos.php" type="submit" class="btn btn-success">Agregar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>  
      </div>  
            