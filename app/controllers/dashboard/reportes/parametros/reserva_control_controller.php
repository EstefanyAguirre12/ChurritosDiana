<?php

try{

	if(isset($_POST['aceptar'])){
        $F1= $_POST['fecha1'];
        $F2= $_POST['fecha2'];
        Page::showMessage(1, "Parametros validos ", "reporte_rangoFechaH.php?f1=$F1&f2=$F2");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/reportes/parametros/reserva_control_view.php");
?>