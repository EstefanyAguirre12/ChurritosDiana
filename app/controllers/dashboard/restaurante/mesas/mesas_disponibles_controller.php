<?php
require_once("../../../app/models/mesasrestaurante.class.php");
try{
	 //Lista mesas
    $MesH = new Mesarestaurante;
    $mesas = $MesH->getMesass();
    if($mesas){

    }else{
        Page::showMessage(2, "Listado de habitaciones no disponible", null );
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/restaurante/mesas/mesas_disponibles_view.php");
?>