<?php
require_once("../../../app/models/tipoproducto.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Tipoproducto;
		if($dato->setId($_GET['id'])){
			if($dato->readTiproducto()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteTipoProducto()){
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
		Page::showMessage(3, "Seleccione un registro", "indextipo.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/restaurante/registros/tipoproducto/eliminar_view.php");
?>