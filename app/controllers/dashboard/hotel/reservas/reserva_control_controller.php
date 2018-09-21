<?php
require_once("../../../app/models/detallereserva.class.php");
try{
	//Aqui va el codigo para buscar
	$dato = new Detallereserva;
	if(isset($_POST['buscar'])){
		$_POST = $dato->validateForm($_POST);
		$data = $dato->searchReserva($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $dato->getReservas();
		}
	}else{
        //Se obtienen los datos
		$data = $dato->getReservas();
	}
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/hotel/reservas/reserva_control_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "../../otros/page/index.php");
	}
	

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>