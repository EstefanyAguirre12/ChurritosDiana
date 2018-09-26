<?php
require_once("../../../app/models/detalleconferencia.class.php");
try{
	//Aqui va el codigo para buscar
	$nueva_orden = new Detalleconferencia;
    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
            $id_cliente = $_GET['cliente'];
            $cuenta = $_GET['cuenta'];
           
            if($nueva_orden->setIdsala($_GET['salon'])){
                //Se obtienen los nueva_ordens
                $data = $nueva_orden->ReadSalones();
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
		if($nueva_orden->setIdsala($_GET['salon'])){
            if($nueva_orden->setIdmesa($_POST['mesa'])){
                if($nueva_orden->setIdsilla($_POST['sillas'])){
                    if($nueva_orden->setFecha($_POST['fecha'])){
                        if($nueva_orden->setHorain($_POST['hinicio'])){
                            if($nueva_orden->setHorafi($_POST['hfin'])){
                                if($nueva_orden->readCuenta($_GET['cuenta'])){
                                    if($nueva_orden->setCantidads($_POST['cantidadS'])){
                                        if($nueva_orden->setCantidadm($_POST['cantidadM'])){
                                            if($nueva_orden->createRconferencia()){
                                                Page::showMessage(1, "Se ha insertado correctamente", null);
                                            }else{
                                                throw new Exception(Database::getException());
                                            }
                                        }else{
                                            throw new Exception("Cantidad de mesas incorrecta", null);
                                        }
                                    }else{
                                        throw new Exception("Cantidad de sillas incorrecta", null);
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
                    throw new Exception("Sila incorrecta", null);
                }
            }else{
                throw new Exception("Mesa incorrecta", null);
            }
		}else{
			throw new Exception("Sala incorrecta", null);
		}
    }
	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/eventos/reservas/p4o1reservacion_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "nueva_orden.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>