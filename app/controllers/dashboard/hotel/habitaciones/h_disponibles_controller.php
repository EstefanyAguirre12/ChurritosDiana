<?php
require_once("../../../app/models/habitaciones.class.php");
try{
	 //Lista Habitaciones
    $hab = new Habitaciones;
    $habitaciones = $hab->getHabitaciones();
    if($habitaciones){

    }else{
        Page::showMessage(2, "Listado de habitaciones no disponible", null );
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/habitaciones/h_disponibles_view.php");
?>