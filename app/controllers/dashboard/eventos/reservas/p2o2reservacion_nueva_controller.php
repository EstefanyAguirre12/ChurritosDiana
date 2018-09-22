<?php
require_once("../../../app/models/detallerestaurante.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detallerestaurante;
	if(isset($_POST['buscar'])){
		$_POST = $nueva_orden->validateForm($_POST);
		$data = $nueva_orden->searchEnte($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $nueva_orden->readClientes();
		}
	}else{
        //Se obtienen los datos
		$data = $nueva_orden->readClientes();
	}
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/eventos/reservas/p2o2reservacion_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "../../otros/page/index.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}