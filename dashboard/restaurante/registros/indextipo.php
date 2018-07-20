<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("habitaciones");
require_once("../../../app/controllers/dashboard/restaurante/registros/tipoproducto/index_controller.php");
require_once("../../graficos/tipoproducto.php");
Page::templateFooter();
?>