<?php
require_once("../../../app/models/sillas.class.php");
try{
	 //Insertar
	$dato = new Sillas;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['num'])){
			if($dato->setCantidad($_POST['cap'])){
				if($dato->createSillas()){
					Page::showMessage(1, "Se ha insertado correctamente", "indexsilla.php");
				}else{
					throw new Exception(Database::getException());
				}
			}else{
				throw new Exception("Numero incorrecto", null);
			}
		}else{
			throw new Exception("Capacidad incorrecta", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/registros/sillas/agregar_view.php");
?>