<?php
require_once("../../../app/models/detallerestaurante.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detallerestaurante;
    if(isset($_GET['cliente'])){
        $id_cliente = $_GET['cliente'];
        if($nueva_orden->setIdCliente($_GET['cliente'])){
             //Se obtienen los datos
             $fecha = date("Y-m-d H:i:s");
             $fecha2 =date("dmYHi");
             $nmbcuenta = $_GET['cliente'].$fecha2;
             
             if($nueva_orden->createCuentaTotal( $nmbcuenta, $fecha)){
                $data =$nueva_orden->readCuentasClientes();
                Page::showMessage(1, "Cuenta de pago creada correctamente", null);
             }else{
                throw new Exception("error al crear la nueva cuenta de pago", null);
             }
           
           
        }else{
            throw new Exception("Este cliente no posee ninguna cuenta activa", null);
        }
       
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/restaurante/ordenes/p3o1nueva_orden_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "nueva_orden.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}