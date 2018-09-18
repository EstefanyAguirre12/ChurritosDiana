<?php
require_once("../../../app/views/dashboard/hotel/servicios/h_servicios_view.php");

try{
	 //Lista Habitaciones
    $hab = new Habitaciones;
    if(isset($_POST['aceptar'])){
		
		$F1= $_POST['precio1'];
		$F2= $_POST['precio2'];
		Page::showMessage(1, "Parametros validos ", "reporte_rangoPrecioH.php?f1=$F1&f2=$F2");

	}
    $habitaciones = $hab->getHabitaciones();
    if($habitaciones){

    }else{
        Page::showMessage(2, "Listado de habitaciones no disponible", null );
    }
    


}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/servicios/h_servicios_view.php");
?>
