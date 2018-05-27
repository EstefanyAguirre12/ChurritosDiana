<?php
require_once("../../../app/models/mesas.class.php");
try{
	 //Insertar
	$dato = new Mesarestaurante;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNumeromesa($_POST['num'])){
			if($dato->setCapacidad($_POST['cap'])){
				if($dato->createMesarestaurante()){
					Page::showMessage(1, "Se ha insertado correctamente", "indexmesa.php");
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
require_once("../../../app/views/dashboard/eventos/registros/mesas/agregar_view.php");
?>