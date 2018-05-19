<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("habitaciones disponibles");
require_once("../../../app/controllers/dashboard/hotel/habitaciones/h_disponibles_controller.php");
Page::templateFooter();
?>