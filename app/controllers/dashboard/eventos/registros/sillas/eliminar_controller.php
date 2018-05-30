<?php
require_once("../../../app/models/sillas.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Sillas;
		if($dato->setId($_GET['id'])){
			if($dato->readSillas()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteSillas()){
                        Page::showMessage(1, "Registro eliminado", "indexsilla.php");
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
		Page::showMessage(3, "Seleccione un registro", "indexsilla.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/registros/sillas/eliminar_view.php");
?>