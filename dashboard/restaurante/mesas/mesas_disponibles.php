<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("mesas disponibles");
require_once("../../../app/controllers/dashboard/restaurante/mesas/mesas_disponibles_controller.php");
Page::templateFooter();
?>