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
        require_once("../../../app/views/dashboard/hotel/registros/tipo/index_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "create.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>