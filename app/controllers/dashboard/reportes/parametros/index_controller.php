<?php

try{

	if(isset($_POST['aceptar'])){
		$F1= $_POST['capacidad1'];
		$F2= $_POST['capacidad2'];
		Page::showMessage(1, "Parametros validos ", "reporte_rangoPrecioS.php?f1=$F1&f2=$F2");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/reportes/parametros/index_view.php");
?>