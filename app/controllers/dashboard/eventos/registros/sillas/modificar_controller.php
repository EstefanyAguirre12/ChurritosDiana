<?php
require_once("../../../app/models/sillas.class.php");
try{
    //MODIFICAR
    $dato = new Sillas;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readSillas()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['num'])){
                        if($dato->setCantidad($_POST['cap'])){ 
                            if($dato->updateSillas()){
                                    Page::showMessage(1, "Se ha modificado correctamente", "indexsilla.php");
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
                Page::showMessage(2, "Registro inexistente", "indexsilla.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecto", "indexsilla.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/registros/sillas/modificar_view.php");
?>