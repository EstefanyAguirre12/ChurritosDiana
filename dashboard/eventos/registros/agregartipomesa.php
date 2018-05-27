<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Eventos");
require_once("../../../app/controllers/dashboard/eventos/registros/tipomesa/agregar_controller.php");
Page::templateFooter();
?>