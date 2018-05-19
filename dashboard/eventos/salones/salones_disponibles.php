<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("salones disponibles");
require_once("../../../app/controllers/dashboard/eventos/salones/salones_disponibles_controller.php");
Page::templateFooter();
?>