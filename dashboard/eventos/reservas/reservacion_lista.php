<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("lista reservaciones");
require_once("../../../app/controllers/dashboard/eventos/reservas/reservacion_lista_controller.php");
Page::templateFooter();
?>