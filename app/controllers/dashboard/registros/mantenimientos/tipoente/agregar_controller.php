<?php
require_once("../../../app/models/tipoente.class.php");
try{
	 //Insertar
	$dato = new Tipoente;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['tip'])){
			if($dato->createTipoente()){
				Page::showMessage(1, "Se ha insertado correctamente", "indextipoente.php");
			}else{
				throw new Exception(Database::getException());
			}
		}else{
			throw new Exception("Tipo incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/tipoente/agregar_view.php");
?>