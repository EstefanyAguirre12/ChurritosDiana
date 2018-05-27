<?php
require_once("../../../app/models/tipoente.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Tipoente;
		if($dato->setId($_GET['id'])){
			if($dato->readTipoente()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteTipoente()){
                        Page::showMessage(1, "Registro eliminado", "indextipoente.php");
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
		Page::showMessage(3, "Seleccione un registro", "indextipoente.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/tipoente/eliminar_view.php");
?>