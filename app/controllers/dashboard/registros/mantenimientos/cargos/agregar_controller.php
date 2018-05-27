<?php
require_once("../../../app/models/categorialavanderia.class.php");
try{
	 //Insertar
	$dato = new Categorialavanderia;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['cat'])){
			if($dato->createCategoria()){
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
require_once("../../../app/views/dashboard/lavanderia/registros/categoria/agregar_view.php");
?>