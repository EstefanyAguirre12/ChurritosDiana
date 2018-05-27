<?php
require_once("../../../app/models/categorialavanderia.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Categorialavanderia;
		if($dato->setId($_GET['id'])){
			if($dato->readCategoria()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteCategoria()){
                        Page::showMessage(1, "Registro eliminado", "indexcategoria.php");
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
require_once("../../../app/views/dashboard/lavanderia/registros/categoria/eliminar_view.php");
?>