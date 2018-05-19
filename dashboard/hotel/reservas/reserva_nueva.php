<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Nueva reserva");
require_once("../../../app/controllers/dashboard/hotel/reservas/reserva_nueva_controller.php");
Page::templateFooter();
?>