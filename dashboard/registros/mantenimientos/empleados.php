<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("empleados");
require_once("../../../app/controllers/dashboard/registros/mantenimientos/empleados_controller.php");
Page::templateFooter();
?>