<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Eliminar reserva");
require_once("../../../app/controllers/dashboard/eventos/reservas/reservacion_eliminar_controller.php");
Page::templateFooter();
?>