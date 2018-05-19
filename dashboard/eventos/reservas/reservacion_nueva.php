<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("nueva reservacion");
require_once("../../../app/controllers/dashboard/eventos/reservas/reservacion_nueva_controller.php");
Page::templateFooter();
?>