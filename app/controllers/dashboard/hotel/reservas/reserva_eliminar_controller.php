<?php
require_once("../../../app/models/detallereserva.class.php");
try{
	//Aqui va el codigo para buscar
    $dato = new Detallereserva;
	if(isset($_GET['id'])){
        if(isset($_POST['eliminar'])){
            if($dato->deleteEnte($_GET['id'])){
                Page::showMessage(1, "Registro eliminado", "reserva_control.php");
            }else{
                throw new Exception(Database::getException());
            }
        }
	}else{
		Page::showMessage(3, "Seleccione un registro", "reserva_control.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/reservas/reserva_eliminar_view.php");
?>