<?php
require_once("../../../app/models/usuario.class.php");
try{
	 //Insertar
	$dato = new Usuario;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['nom'])){
			if($dato->setApellido($_POST['ap'])){
				if($dato->setDocIdentidad($_POST['dui'])){
					if($dato->createEnte()){
						Page::showMessage(1, "Se ha insertado correctamente", "indexentes.php");
					}else{
						throw new Exception(Database::getException());
					}
				}else{
					throw new Exception("DUI incorrecto", null);
				}
			}else{
				throw new Exception("Apellidos incorrecto", null);
			}
		}else{
			throw new Exception("Nombre incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/usuarios/agregar_view.php");
?>