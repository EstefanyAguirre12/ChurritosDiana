<?php
require_once("../../../app/models/salas.class.php");
try{
	 //Lista Habitaciones
    $sala = new Salas;
    $salas = $sala->getSalas();
    if(isset($_POST['aceptar'])){
		
		$F1= $_POST['precio1'];
		$F2= $_POST['precio2'];
		Page::showMessage(1, "Parametros validos ", "reporte_rangoPrecioE.php?f1=$F1&f2=$F2");

	}
    if($salas){

    }else{
        Page::showMessage(2, "Listado de salas no disponible", null );
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/salones/salones_disponibles_view.php");
?>