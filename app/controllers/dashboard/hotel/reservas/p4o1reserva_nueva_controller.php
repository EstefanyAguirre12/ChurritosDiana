<?php
require_once("../../../app/models/detallereserva.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detallereserva;
    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
            $id_cliente = $_GET['cliente'];
            $cuenta = $_GET['cuenta'];
           
            if($nueva_orden->setIdhabitacion($_GET['habitacion'])){
                //Se obtienen los datos
                $data = $nueva_orden->readHabitacion();
           }else{
               throw new Exception("Este cliente no posee ninguna cuenta activa", null);
           }
        }else{
            throw new Exception("Error ningun cliente selecionado", null);
        }
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }
    if(isset($_POST['enviar'])){
		$_POST = $nueva_orden->validateForm($_POST);
		if($nueva_orden->setIdhabitacion($_GET['habitacion'])){
            if($nueva_orden->setFechaInicio($_POST['fechai'])){
                if($nueva_orden->setFechaFin($_POST['fechaf'])){
                    if($nueva_orden->setHorainicio($_POST['hinicio'])){
                        if($nueva_orden->setHorafin($_POST['hfin'])){
                            if($nueva_orden->readCuenta($_GET['cuenta'])){
                                if($nueva_orden->createDetalleres()){
                                    Page::showMessage(1, "Se ha insertado correctamente", null);
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                throw new Exception("Cuneta cliente incorrecta", null);
                            }
                        }else{
                            throw new Exception("Hora final incorrecta", null);
                        }
                    }else{
                        throw new Exception("Hora inicio incorrecta", null);
                    }
                }else{
                    throw new Exception("Fecha incorrecta", null);
                }
            }else{
                throw new Exception("Fecha incorrecta", null);
            }
		}else{
			throw new Exception("habitacion incorrecta", null);
		}
    }
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/hotel/reservas/p4o1reserva_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "reserva_nueva.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>