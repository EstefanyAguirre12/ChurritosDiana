<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("usuarios");
require_once("../../../app/controllers/dashboard/registros/mantenimientos/usuarios_controller.php");
Page::templateFooter();
?>