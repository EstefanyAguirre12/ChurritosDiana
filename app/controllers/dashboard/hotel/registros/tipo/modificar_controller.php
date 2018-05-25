<?php
require_once("../../../app/models/habitaciones.class.php");
try{
    //MODIFICAR
    $hab = new Habitaciones;
    if(isset($_GET['id'])){
        if($hab->setId($_GET['id'])){
            if($hab->readHabitacion()){
                if(isset($_POST['modificar'])){
                    $_POST = $hab->validateForm($_POST);
                    if($hab->setNumero($_POST['num'])){
                        if($hab->setCapacidad($_POST['cap'])){
                            if($hab->setPrecio($_POST['pre'])){
                                if($hab->setIdTipo($_POST['TipoHabitacion'])){
                                    if($hab->updateHabitacion()){
                                         Page::showMessage(1, "Se ha modificado correctamente", "habitaciones.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Tipo Habitacion Incorrecto ");
                                }
                            }else{
                                throw new Exception("Precio Incorrecto ");
                            }
                        }else{
                            throw new Exception("Capacidad Incorrecto ");
                        }
                    }else{
                        throw new Exception("Numero incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Ocasion inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Ocasion incorrecta", "index.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/registros/tipo/modificar_view.php");
?>