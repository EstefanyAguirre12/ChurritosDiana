<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("nueva ordenes");
require_once("../../../app/controllers/dashboard/eventos/reservas/p3o3reservacion_nueva_controller.php");
Page::templateFooter();
?>