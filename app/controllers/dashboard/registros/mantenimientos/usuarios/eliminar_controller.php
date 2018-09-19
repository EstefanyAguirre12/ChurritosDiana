<?php
require_once("../../../app/models/usuario.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Usuario;
		if($dato->setId($_GET['id'])){
			if($dato->getUsuario()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteUsuario()){
                        Page::showMessage(1, "Registro eliminado", "indexusuarios.php");
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
		Page::showMessage(3, "Seleccione un registro", "indexusuarios.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/entes/eliminar_view.php");
?>
