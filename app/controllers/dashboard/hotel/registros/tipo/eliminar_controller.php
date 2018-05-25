<?php
require_once("../../../app/models/habitaciones.class.php");
try{
	if(isset($_GET['id'])){
		$hab = new Habitaciones;
		if($hab->setId($_GET['id'])){
			if($hab->readHabitacion()){
				if(isset($_POST['eliminar'])){
					if($hab->deleteHabitacion()){
                        Page::showMessage(1, "Registro eliminado", "habitaciones.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Registro inexistente");
			}
		}else{
			throw new Exception("Registro incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione un registro", "habitaciones.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/registros/tipo/eliminar_view.php");
?>