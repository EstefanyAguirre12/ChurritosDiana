<?php
require_once("../../../app/models/producto.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Producto;
		if($dato->setId($_GET['id'])){
			if($dato->readProducto()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteProducto()){
                        Page::showMessage(1, "Registro eliminado", "indexproducto.php");
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
require_once("../../../app/views/dashboard/restaurante/registros/productos/eliminar_view.php");
?>