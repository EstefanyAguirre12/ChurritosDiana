<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Reservas en linea");
require_once("../../../app/controllers/dashboard/hotel/reservas/reserva_online_controller.php");
Page::templateFooter();
?>