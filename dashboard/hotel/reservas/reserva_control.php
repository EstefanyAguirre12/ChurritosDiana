<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Control de reservas");
require_once("../../../app/controllers/dashboard/hotel/reservas/reserva_control_controller.php");
Page::templateFooter();
?>