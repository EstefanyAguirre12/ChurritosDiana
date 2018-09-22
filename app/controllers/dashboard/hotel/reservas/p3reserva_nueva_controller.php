<?php
require_once("../../../app/models/ente.class.php");
try{
	 //Insertar
	$dato = new Ente;
    if(isset($_GET['cliente'])){
        $id_cliente = $_GET['cliente'];
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
	

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/reservas/p3reserva_nueva_view.php");
?>