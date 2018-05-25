<?php
/*Comentario de prueba x5*/
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("empleados");
require_once("../../../app/controllers/dashboard/registros/backup/exportar_controller.php");
Page::templateFooter();
?>