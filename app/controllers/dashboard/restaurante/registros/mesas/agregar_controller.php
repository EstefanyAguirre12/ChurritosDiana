<?php
require_once("../../../app/models/tipohabitacion.class.php");
try{
	 //Insertar
	$dato = new Tipohabitacion;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['tip'])){
			if($dato->createTipohabitacion()){
				Page::showMessage(1, "Se ha insertado correctamente", "indextipo.php");
			}else{
				throw new Exception(Database::getException());
			}

		}else{
			throw new Exception("Tipo Habitacion incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/registros/tipo/agregar_view.php");
?>