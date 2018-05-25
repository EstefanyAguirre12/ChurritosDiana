<?php
require_once("../../../app/models/categoriaproducto.class.php");
try{
	 //Insertar
	$dato = new Categoriaproducto;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['cat'])){
			if($dato->createCategoriaproducto()){
				Page::showMessage(1, "Se ha insertado correctamente", "indexcategoria.php");
			}else{
				throw new Exception(Database::getException());
			}

		}else{
			throw new Exception("Categoria incorrecta", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/restaurante/registros/categoriaproducto/agregar_view.php");
?>