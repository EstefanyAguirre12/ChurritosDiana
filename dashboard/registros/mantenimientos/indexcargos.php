<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Registros");
require_once("../../../app/controllers/dashboard/registros/mantenimientos/cargos/index_controller.php");
require_once("../../graficosyreportes/cargoempleados.php");
Page::templateFooter();
?>