<?php
require_once("../../../app/models/material.class.php");
try{
	 //Insertar
	$dato = new Material;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['mat'])){
			if($dato->createMaterial()){
				Page::showMessage(1, "Se ha insertado correctamente", "indexmaterial.php");
			}else{
				throw new Exception(Database::getException());
			}

		}else{
			throw new Exception("Material incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/lavanderia/registros/material/agregar_view.php");
?>