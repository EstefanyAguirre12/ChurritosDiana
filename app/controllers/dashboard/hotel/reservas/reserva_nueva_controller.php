<?php
require_once("../../../app/models/detallereserva.class.php");
try{
	//Aqui va el codigo para buscar
    $dato = new Detallereserva;
    $texto ="¿Desea agregar nuevo cliente registrado?  Si : OK";
    Page::showMessage(4, $texto, "../../otros/page/index.php",true);
    require_once("../../../app/views/dashboard/hotel/reservas/reserva_nueva_view.php");
    

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}


?>