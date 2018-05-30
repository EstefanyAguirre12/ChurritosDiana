<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../../../app/controllers/dashboard/page/logout_controller.php");
Page::templateFooter();
?>
<?php