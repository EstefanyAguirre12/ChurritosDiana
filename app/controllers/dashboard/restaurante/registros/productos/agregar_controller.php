<?php
require_once("../../../app/models/producto.class.php");
try{
	 //Insertar
	$dato = new Producto;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['nom'])){
			if($dato->setDescripcion($_POST['des'])){
				if($dato->setIdCategoria($_POST['cat'])){
					if($dato->setPrecio($_POST['pre'])){
						if($dato->setIdTipo($_POST['tip'])){
							if($dato->createProducto()){
								Page::showMessage(1, "Se ha insertado correctamente", "indexproducto.php");
							}else{
								throw new Exception(Database::getException());
							}
						}else{
							throw new Exception("Tipo incorrecto", null);
						}
					}else{
						throw new Exception("Precio incorrecto", null);
					}
				}else{
					throw new Exception("Catgegoria incorrecta", null);
				}
			}else{
				throw new Exception("Descripcion incorrecta", null);
			}
		}else{
			throw new Exception("Nombre incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/restaurante/registros/productos/agregar_view.php");
?>