<?php
require_once("../../../app/models/habitaciones.class.php");
try{
	//Aqui va el codigo para buscar
	$hab = new Habitaciones;
	if(isset($_POST['buscar'])){
		$_POST = $hab->validateForm($_POST);
		$data = $hab->searchHabitacion($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $hab->getHabitacion();
		}
	}else{
        //Se obtienen los datos
		$data = $hab->getHabitacion();
	}
	if($data){
        //Se muestran los datos
        require_once("../../../app/views/dashboard/hotel/registros/habitaciones_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "create.php");
	}

	 //Insertar
	 if(isset($_POST['crear'])){
		 $_POST = $hab->validateForm($_POST);
		if($hab->setNumero($_POST['num'])){
			if($hab->setCapacidad($_POST['cap'])){
				if($hab->setPrecio($_POST['pre'])){
					if($hab->setIdTipo($_POST['TipoHabitacion'])){
						if($hab->createHabitacion()){
							Page::showMessage(1, "Se ha insertado correctamente", "index.php");
						}else{
							throw new Exception(Database::getException());
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



?>