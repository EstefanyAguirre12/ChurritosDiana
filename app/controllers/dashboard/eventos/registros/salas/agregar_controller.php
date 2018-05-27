<?php
require_once("../../../app/models/salas.class.php");
try{
	 //Insertar
	$dato = new Salas;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['nom'])){
			if($dato->setDescripcion($_POST['des'])){
				if($dato->setCapacidad($_POST['cap'])){
					if($dato->setCosto($_POST['cos'])){
						if($dato->createSala()){
							Page::showMessage(1, "Se ha insertado correctamente", "indexsala.php");
						}else{
							throw new Exception(Database::getException());
						}
					}else{
						throw new Exception("Costo incorrecto", null);
					}
				}else{
					throw new Exception("Capacidad incorrecto", null);
				}
			}else{
				throw new Exception("Descripcion incorrecto", null);
			}
		}else{
			throw new Exception("Nombre incorrecta", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/registros/salas/agregar_view.php");
?>