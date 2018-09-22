<!-- page content -->
      <div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">

          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class='piña-wrapper'>

              <div class='piña-header'>
                <h1 class='piña-header__title'>Listado de salones</h1>
                <h2 class='piña-header__subtitle'>Eventos & mas</h2>
              </div>

              <div class='cards'>
                <?php
                  foreach($salas as $salon){
                    print("
                <div class=' card [ is-collapsed ] '>
                  <div class='card__inner [ js-expander ]'>
                    <span>Sala: $salon[NombreSala]</span>
                    <br>
                    <span>Estado:$salon[Estado] </span>
                    <br>
                    <i class='fas fa-calendar-alt'></i>
                  </div>
                  <div class='card__expander'>
                    <i class='fa fa-close [ js-collapser ]'></i>
                      <h3 >Precio: $$salon[Costo]  <br> <br> Capacidad: $salon[Capacidad]  </h3>

                  </div>
                </div>
                ");
              }
              ?>
              </div>

              </div>
            </div>
          </div>

        </div>
      </div>
<!-- /page content -->
