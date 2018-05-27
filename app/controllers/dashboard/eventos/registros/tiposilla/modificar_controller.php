<?php
require_once("../../../app/models/mesasrestaurante.class.php");
try{
    //MODIFICAR
    $dato = new Mesarestaurante;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readMesarestaurante()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNumeromesa($_POST['num'])){  
                        if($dato->setCapacidad($_POST['cap'])){  
                            if($dato->updateMesarestaurante()){
                                    Page::showMessage(1, "Se ha modificado correctamente", "indexmesa.php");
                            }else{
                                throw new Exception(Database::getException());
                            }  
                        }else{
                            throw new Exception("Capacidad incorrecta");
                        }                
                    }else{
                        throw new Exception("Numero incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "indexmesa.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecto", "indexmesa.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/registros/mesas/modificar_view.php");
?>