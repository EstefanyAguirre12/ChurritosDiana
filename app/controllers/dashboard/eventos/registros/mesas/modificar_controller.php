<?php
require_once("../../../app/models/mesas.class.php");
try{
    //MODIFICAR
    $dato = new Mesas;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readMesas()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['num'])){
                        if($dato->setCantidad($_POST['cap'])){ 
                            if($dato->updateMesas()){
                                    Page::showMessage(1, "Se ha modificado correctamente", "indexmesa.php");
                            }else{
                                throw new Exception(Database::getException());
                            }  
                        }else{
                            throw new Exception("Cantidad incorrecta");
                        }                
                    }else{
                        throw new Exception("Nombre incorrecto");
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