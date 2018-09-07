<?php

try{

	if(isset($_POST['aceptar'])){
		if(isset($_GET['fecha1'])){
			$F1= $_POST['fecha1'];
			$F2= $_POST['fecha2'];
			Page::showMessage(1, "Parametros validos ", "../graficos/reservasxfecha.php?f1=$F1&f2=$F2");
			}else{
			Page::showMessage(3, "No existen registros", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/graficos/parametros/paramfecha_view.php");
?>