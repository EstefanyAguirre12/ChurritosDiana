<?php
require_once("../../../app/models/detallereserva.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detallereserva;
    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
                $id_cliente = $_GET['cliente'];
                $cuenta = $_GET['cuenta'];
                $nueva_orden->readCuenta($_GET['cuenta']);
                $data = $nueva_orden->readCuentaHabitaciones();
        }else{
            throw new Exception("Error ningun cliente selecionado", null);
        }
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
		if(isset($_POST['eliminar'])){
				$nueva_orden->setIdhabitacion($_POST['IdHabitacion']);
				$nueva_orden->readCuenta($_GET['cuenta']);
			if(	$nueva_orden->eliminarHabitacion()){
				$nueva_orden->updateHabitacion();
				Page::showMessage(1, "Se ha insertado correctamente se continuara con selecion de productos" , "p5reserva_nueva.php?cliente=$id_cliente&cuenta=$cuenta");
			}else {
			throw new Exception("Error al eliminar", null);
			}

		}
	if($data){
		//Se muestran los
        require_once("../../../app/views/dashboard/hotel/reservas/p5reserva_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "p4reserva_nueva.php?cliente=$id_cliente&cuenta=$cuenta");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
