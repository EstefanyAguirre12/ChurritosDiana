<?php
require_once("../../../app/models/detallerestaurante.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detallerestaurante;
    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
            if($nueva_orden->readCuenta($_GET['cuenta'])){
                $nueva_orden->readCuenta($_GET['cuenta']);
                $data = $nueva_orden->readCuentaProducto($_GET['cuenta']);
            }else{
                throw new Exception("Error ningun cliente selecionado", null);
            }
        }else{
            throw new Exception("Error ningun cliente selecionado", null);
        }
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/restaurante/ordenes/p5nueva_orden_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "nueva_orden.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}