<?php
require_once("../../../app/models/ente.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Ente;
		if($dato->setId($_GET['id'])){
			if($dato->readEnte()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteEnte()){
                        Page::showMessage(1, "Registro eliminado", "indexentes.php");
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
		Page::showMessage(3, "Seleccione un registro", "indexentes.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/entes/eliminar_view.php");
?>