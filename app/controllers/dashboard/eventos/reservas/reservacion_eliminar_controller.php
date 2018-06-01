<?php
require_once("../../../app/models/detalleconferencia.class.php");
try{
	//Aqui va el codigo para buscar
    $dato = new Detalleconferencia;
	if(isset($_GET['id'])){
        if(isset($_POST['eliminar'])){
            if($dato->deleteConferencia($_GET['id'])){
                Page::showMessage(1, "Registro eliminado", "reservacion_lista.php");
            }else{
                throw new Exception(Database::getException());
            }
        }
	}else{
		Page::showMessage(3, "Seleccione un registro", "reservacion_lista.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/reservas/reservacion_eliminar_view.php");
?>