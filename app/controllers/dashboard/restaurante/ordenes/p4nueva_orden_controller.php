<?php
require_once("../../../app/models/detallerestaurante.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detallerestaurante;
    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
            $id_cliente = $_GET['cliente'];
            $cuenta = $_GET['cuenta'];
            $data1 = $nueva_orden->readTiposPro();
            $data2 = $nueva_orden->readCategoriaPro();
           
        }else{
            throw new Exception("Error ningun cliente selecionado", null);
        }
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
	if( isset( $data1) && isset($data2) ){
		//Se muestran los 
        require_once("../../../app/views/dashboard/restaurante/ordenes/p4nueva_orden_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "nueva_orden.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}