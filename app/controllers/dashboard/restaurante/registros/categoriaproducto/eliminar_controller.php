<?php
require_once("../../../app/models/categoriaproducto.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Categoriaproducto;
		if($dato->setId($_GET['id'])){
			if($dato->readCategoriaproducto()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteCategoriaproducto()){
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
require_once("../../../app/views/dashboard/restaurante/registros/categoriaproducto/eliminar_view.php");
?>