<?php
require_once("../../../app/models/cargos.class.php");
try{
	 //Insertar
	$dato = new Cargos;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['car'])){
			if($dato->setDescripcion($_POST['des'])){
				if($dato->createCargo()){
					Page::showMessage(1, "Se ha insertado correctamente", "indexcargos.php");
				}else{
					throw new Exception(Database::getException());
				}
			}else{
				throw new Exception("Descripción incorrecta", null);
			}
		}else{
			throw new Exception("Cargo incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/cargos/agregar_view.php");
?>