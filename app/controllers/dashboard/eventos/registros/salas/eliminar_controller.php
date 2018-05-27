<?php
require_once("../../../app/models/salas.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Salas;
		if($dato->setId($_GET['id'])){
			if($dato->readSala()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteSala()){
                        Page::showMessage(1, "Registro eliminado", "indexsala.php");
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
		Page::showMessage(3, "Seleccione un registro", "indexsala.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/registros/salas/eliminar_view.php");
?>