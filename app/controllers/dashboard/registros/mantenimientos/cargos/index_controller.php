<?php
require_once("../../../app/models/cargos.class.php");
try{
	//Aqui va el codigo para buscar
	$dato = new Cargos;
	if(isset($_POST['buscar'])){
		$_POST = $dato->validateForm($_POST);
		$data = $dato->searchCargo($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $dato->getCargo();
		}
	}else{
        //Se obtienen los datos
		$data = $dato->getCargo();
	}
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/registros/mantenimientos/cargos/index_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "../../otros/page/index.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>