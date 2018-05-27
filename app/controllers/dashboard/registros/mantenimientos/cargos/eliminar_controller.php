<?php
require_once("../../../app/models/cargos.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Cargos;
		if($dato->setId($_GET['id'])){
			if($dato->readCargo()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteCargo()){
                        Page::showMessage(1, "Registro eliminado", "indexcargos.php");
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
		Page::showMessage(3, "Seleccione un registro", "indexcategoria.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/cargos/eliminar_view.php");
?>