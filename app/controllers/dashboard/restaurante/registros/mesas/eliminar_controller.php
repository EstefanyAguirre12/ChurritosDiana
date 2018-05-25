<?php
require_once("../../../app/models/tipohabitacion.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Tipohabitacion;
		if($dato->setId($_GET['id'])){
			if($dato->readTipohabitacion()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteTipohabitacion()){
                        Page::showMessage(1, "Registro eliminado", "indextipo.php");
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