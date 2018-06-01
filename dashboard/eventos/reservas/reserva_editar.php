<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Editar reserva");
require_once("../../../app/controllers/dashboard/eventos/reservas/reservacion_editar_controller.php");
Page::templateFooter();
?>