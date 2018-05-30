<?php
require_once("../../../app/models/mesas.class.php");
try{
	//Aqui va el codigo para buscar
	$dato = new Mesas;
	if(isset($_POST['buscar'])){
		$_POST = $dato->validateForm($_POST);
		$data = $dato->searchMesas($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $dato->getMesa();
		}
	}else{
        //Se obtienen los datos
		$data = $dato->getMesa();
	}
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/eventos/registros/mesas/index_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "../../otros/page/index.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>