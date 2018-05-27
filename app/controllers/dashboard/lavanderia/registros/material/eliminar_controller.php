<?php
require_once("../../../app/models/material.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Material;
		if($dato->setId($_GET['id'])){
			if($dato->readMaterial()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteMaterial()){
                        Page::showMessage(1, "Registro eliminado", "indexmaterial.php");
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
		Page::showMessage(3, "Seleccione un registro", "indextipo.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/lavanderia/registros/material/eliminar_view.php");
?>