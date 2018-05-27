<?php
require_once("../../../app/models/mesasrestaurante.class.php");
try{
	//Aqui va el codigo para buscar
	$dato = new Mesarestaurante;
	if(isset($_POST['buscar'])){
		$_POST = $dato->validateForm($_POST);
		$data = $dato->searchMesarestaurante($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $dato->getMesarestaurante();
		}
	}else{
        //Se obtienen los datos
		$data = $dato->getMesarestaurante();
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