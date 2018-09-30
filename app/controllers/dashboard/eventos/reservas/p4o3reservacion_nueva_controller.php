<?php
require_once("../../../app/models/detalleconferencia.class.php");
require_once("../../../app/models/detallerestaurante.class.php");
require_once("../../../app/models/detallereserva.class.php");
try{
	//Aqui va el codigo para buscar
    $nueva_orden1 = new Detalleconferencia;
    $nueva_orden2 = new Detallereserva;
    $nueva_orden3 = new Detallerestaurante;

    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
            $id_cliente = $_GET['cliente'];
            $cuenta = $_GET['cuenta'];
            $nueva_orden1->readCuenta($_GET['cuenta']);
            $nueva_orden2->readCuenta($_GET['cuenta']);
            $nueva_orden3->readCuenta($_GET['cuenta']);
            $nueva_orden3->setIdCliente($_GET['cliente']);
            $data1 = $nueva_orden1->readCuentaEventos($_GET['cuenta']);
            $data2 = $nueva_orden2->readCuentaHabitaciones();
            $data3 = $nueva_orden3->readCuentaProducto($_GET['cuenta']);
            $nueva_orden3->readCuenta($_GET['cuenta']);
            $data4 = $nueva_orden3->readCuentastotales($_GET['cuenta']);
        }else{
            throw new Exception("Error ningun cliente selecionado", null);
        }
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
    if(isset($_POST['guardar'])){
    $_POST = $nueva_orden1->validateForm($_POST);
    //if($nueva_orden1->SetTotal($_POST['dinero'])){
            $id_cliente = $_GET['cliente'];
            $cuenta = $_GET['cuenta'];
            if($nueva_orden1->PagarCuenta($_POST['dinero'],$_GET['cuenta'] )){
                Page::showMessage(1, "Se ha insertado correctamente se continuara con selecion de productos" , null);
            }else{
            throw new Exception(Database::getException());
             }
    /*}else{
      throw new Exception("Cantidad  incorrecto", null);
    }*/
  }
	if( isset( $data1) || isset($data2)|| isset($data3)){
		//Se muestran los
        require_once("../../../app/views/dashboard/eventos/reservas/p4o3reservacion_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "reservacion_nueva.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
