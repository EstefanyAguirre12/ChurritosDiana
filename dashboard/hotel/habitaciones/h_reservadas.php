<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("habitaciones reservadas");
require_once("../../../app/controllers/dashboard/hotel/habitaciones/h_reservadas_controller.php");
Page::templateFooter();
?>