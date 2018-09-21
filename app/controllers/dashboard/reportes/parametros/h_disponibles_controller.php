<?php

try{

	if(isset($_POST['aceptar'])){
        $F1= $_POST['precio1'];
		$F2= $_POST['precio2'];
		Page::showMessage(1, "Parametros validos ", "reporte_rangoPrecioH.php?f1=$F1&f2=$F2");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/reportes/parametros/h_disponibles_view.php");
?>