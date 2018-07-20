<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Registros");
require_once("../../../app/controllers/dashboard/registros/mantenimientos/tipoente/index_controller.php");
require_once("../../graficos/tipoente.php");
Page::templateFooter();
?>