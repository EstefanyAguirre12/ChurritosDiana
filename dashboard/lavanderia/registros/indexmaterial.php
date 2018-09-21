<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Lavanderia");
require_once("../../../app/controllers/dashboard/lavanderia/registros/material/index_controller.php");
require_once("../../graficosyreportes/materiallavanderia.php");
Page::templateFooter();
?>