<?php
require_once("../../../app/models/detalleconferencia.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detalleconferencia;
    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
                $id_cliente = $_GET['cliente'];
                $cuenta = $_GET['cuenta'];
                $nueva_orden->readCuenta($_GET['cuenta']);
                $data = $nueva_orden->readCuentaEventos($_GET['cuenta']);
        }else{
            throw new Exception("Error ningun cliente selecionado", null);
        }
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/eventos/reservas/p5reservacion_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "p4reservacion_nueva.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}