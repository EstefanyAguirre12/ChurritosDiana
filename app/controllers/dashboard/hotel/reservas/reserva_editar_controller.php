
<?php
require_once("../../../app/models/detallereserva.class.php");
try{
	//Aqui va el codigo para buscar
    $dato = new Detallereserva;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readDetalleres()){
                if(isset($_POST['enviar'])){
                    if($dato->setIdhabitacion($_POST['habitacion'])){
                        if($dato->setFechaInicio($_POST['fechai'])){
                            if($dato->setFechaFin($_POST['fechaf'])){
                                if($dato->setHorainicio($_POST['hinicio'])){
                                    if($dato->setHorafin($_POST['hfin'])){
                                        if($dato->setIdcuenta($_POST['cuenta'])){
                                            if($dato->updateDetalleres()){
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
require_once("../../../app/views/dashboard/hotel/reservas/reserva_editar_view.php");
?>