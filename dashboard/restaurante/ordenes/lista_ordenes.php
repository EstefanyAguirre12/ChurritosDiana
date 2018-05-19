<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("lista ordenes");
require_once("../../../app/controllers/dashboard/restaurante/ordenes/lista_ordenes_controller.php");
Page::templateFooter();
?>