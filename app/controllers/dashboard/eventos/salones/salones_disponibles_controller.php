<?php
require_once("../../../app/models/salas.class.php");
try{
	 //Lista Habitaciones
    $sala = new Salas;
    $salas = $sala->getSalas();
    if($salas){

    }else{
        Page::showMessage(2, "Listado de salas no disponible", null );
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/salones/salones_disponibles_view.php");
?>