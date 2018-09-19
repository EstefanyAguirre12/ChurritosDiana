<?php
require_once("../../../app/models/pedidohabitacion.class.php");

try{
	 //Lista Habitaciones
    $hab = new Pedidohabitacion;
    $hab->setId($_GET['IdUsuario']);
    $habitaciones = $hab->getPedidos();
    if($habitaciones){

    }else{
        Page::showMessage(2, "Listado de pedidos no disponible", null );
    }
    


}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/servicios/h_pedidos_view.php");
?>
