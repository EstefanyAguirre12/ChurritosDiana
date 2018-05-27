<?php
require_once("../../../app/models/tipoproducto.class.php");
try{
	 //Insertar
	$dato = new Tipoproducto;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['tip'])){
			if($dato->createTiproducto()){
				Page::showMessage(1, "Se ha insertado correctamente", "indextipo.php");
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
require_once("../../../app/views/dashboard/restaurante/registros/tipoproducto/agregar_view.php");
?>