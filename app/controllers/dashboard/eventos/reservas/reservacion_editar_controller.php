<?php
require_once("../../../app/models/detalleconferencia.class.php");
try{
	//Aqui va el codigo para buscar
    $dato = new Detalleconferencia;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readDetalleconferencia()){
                if(isset($_POST['modificar'])){
                    if($dato->setIdsala($_POST['sala'])){
                        if($dato->setIdmesa($_POST['mesa'])){
                            if($dato->setIdsilla($_POST['sillas'])){
                                if($dato->setFecha($_POST['fecha'])){
                                    if($dato->setHorain($_POST['hinicio'])){
                                        if($dato->setHorafi($_POST['hfin'])){
                                            if($dato->setIdcuenta($_POST['cuenta'])){
                                                if($dato->setCantidads($_POST['cantidadS'])){
                                                    if($dato->setCantidadm($_POST['cantidadM'])){
                                                        if($dato->updateDetalleconferencia()){
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
            }else{
                Page::showMessage(2, "Registro inexistente", "indexsala.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecto", "indexsala.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/reservas/reservacion_editar_view.php");
?>