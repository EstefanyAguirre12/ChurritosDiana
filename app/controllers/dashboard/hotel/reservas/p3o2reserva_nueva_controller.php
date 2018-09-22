<?php
require_once("../../../app/models/detallerestaurante.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detallerestaurante;
    if(isset($_GET['cliente'])){
        $id_cliente = $_GET['cliente'];
        if($nueva_orden->setIdCliente($_GET['cliente'])){
             //Se obtienen los datos
             $data = $nueva_orden->readCuentasClientes();
        }else{
            throw new Exception("Este cliente no posee ninguna cuenta activa", null);
        }
       
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/hotel/reservas/p3o2reserva_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "nueva_orden.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}