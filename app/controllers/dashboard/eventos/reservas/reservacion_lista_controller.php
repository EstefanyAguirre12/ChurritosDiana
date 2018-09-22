<?php
require_once("../../../app/models/detalleconferencia.class.php");
try{
	//Aqui va el codigo para buscar
	$dato = new Detalleconferencia;

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
        require_once("../../../app/views/dashboard/eventos/reservas/reservacion_lista_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "../../otros/page/index.php");
	}
	if(isset($_POST['aceptar'])){
		
		$F1= $_POST['fecha1'];
		$F2= $_POST['fecha2'];
		Page::showMessage(1, "Parametros validos ", "reporte_rangoFechaS.php?f1=$F1&f2=$F2");

	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>