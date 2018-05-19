<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("mesas ocupadas");
require_once("../../../app/controllers/dashboard/restaurante/mesas/mesas_ocupadas_controller.php");
Page::templateFooter();
?>