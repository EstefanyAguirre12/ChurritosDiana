<?php
require_once("../../../app/models/detallerestaurante.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detallerestaurante;
    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
            $id_cliente = $_GET['cliente'];
            $cuenta = $_GET['cuenta'];
            if($nueva_orden->setIdCproducto($_GET['categoria'])){
                //Se obtienen los datos
                $data = $nueva_orden->readCategoriaProductos();
           }else{
               throw new Exception("mal selecionado", null);
           }
        }else{
            throw new Exception("Este cliente no posee ninguna cuenta activa", null);
        }
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/hotel/reservas/p4o2reserva_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "nueva_orden.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>