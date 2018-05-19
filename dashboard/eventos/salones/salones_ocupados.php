<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("salones ocupados");
require_once("../../../app/controllers/dashboard/eventos/salones/salones_ocupados_controller.php");
Page::templateFooter();
?>