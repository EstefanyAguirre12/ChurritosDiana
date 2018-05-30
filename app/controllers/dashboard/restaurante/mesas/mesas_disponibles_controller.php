<?php
require_once("../../../app/models/mesas.class.php");
try{
	 //Lista mesas
    $MesH = new Mesas;
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