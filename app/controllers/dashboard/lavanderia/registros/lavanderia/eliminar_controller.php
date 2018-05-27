<?php
require_once("../../../app/models/lavanderia.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Lavanderia;
		if($dato->setId($_GET['id'])){
			if($dato->readLavanderia()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteLavanderia()){
                        Page::showMessage(1, "Registro eliminado", "indexlavanderia.php");
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
require_once("../../../app/views/dashboard/lavanderia/registros/lavanderia/eliminar_view.php");
?>