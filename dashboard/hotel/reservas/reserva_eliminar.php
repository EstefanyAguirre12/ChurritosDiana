<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Eliminar reserva");
require_once("../../../app/controllers/dashboard/hotel/reservas/reserva_eliminar_controller.php");
Page::templateFooter();
?>