<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("habitaciones");
require_once("../../../app/controllers/dashboard/restaurante/registros/categoriaproducto/index_controller.php");
require_once("../../graficosyreportes/categoriaproductos.php");
Page::templateFooter();
?>