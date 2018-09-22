      <!-- page content -->
      <div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Mesas</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

    <div class='piña-wrapper'>

    <div class='piña-header'>
      <h1 class='piña-header__title'>Listado de mesas</h1>
      <h2 class='piña-header__subtitle'>restaurante o sole mio</h2>
    </div>

    <div class='cards'>
      <?php
        foreach($mesas as $mesa){
          print("
      <div class=' card [ is-collapsed ] '>
        <div class='card__inner [ js-expander ]'>
          <span>Mesa #: $mesa[NumeroMesa]</span>
          <br>
          <i class='fas fa-utensils'></i>
        </div>
        <div class='card__expander'>
          <i class='fa fa-close [ js-collapser ]'></i>
          Capacidad: $mesa[Capacidad]
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
      <!-- /page content -->
