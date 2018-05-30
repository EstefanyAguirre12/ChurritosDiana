<?php
require_once("../../../app/models/habitaciones.class.php");
try{
	 //Insertar
	$hab = new Habitaciones;
	if(isset($_POST['guardar'])){
		$_POST = $hab->validateForm($_POST);
		if($hab->setNumero($_POST['num'])){
			if($hab->setCapacidad($_POST['cap'])){
				if($hab->setPrecio($_POST['pre'])){
					if($hab->setIdTipo($_POST['TipoHabitacion'])){
						if($hab->setIdTipo($_POST['TipoHabitacion'])){
							if($hab->createHabitacion()){
								Page::showMessage(1, "Se ha insertado correctamente", "habitaciones.php");
							}else{
								throw new Exception(Database::getException());
							}
						}else{
							throw new Exception("Tipo Habitacion Incorrecto ");
						}
					}else{
						throw new Exception("Tipo Habitacion Incorrecto ");
					}
				}else{
					throw new Exception("Precio Incorrecto ");
				}
			}else{
				throw new Exception("Capacidad Incorrecto ");
			}
		}else{
			throw new Exception("Numero incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/registros/habitaciones/agregar_view.php");
?>