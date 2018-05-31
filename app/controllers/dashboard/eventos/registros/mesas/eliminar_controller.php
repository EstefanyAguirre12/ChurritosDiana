<?php
require_once("../../../app/models/mesas.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Mesas;
		if($dato->setId($_GET['id'])){
			if($dato->readMesas()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteMesas()){
                        Page::showMessage(1, "Registro eliminado", "indexmesa.php");
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
		Page::showMessage(3, "Seleccione un registro", "indexmesa.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/registros/mesas/eliminar_view.php");
?>