<?php
require_once("../../../app/models/tipohabitacion.class.php");
try{
    //MODIFICAR
    $dato = new Tipohabitacion;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readTipohabitacion()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['tip'])){  
                        if($dato->updateTipohabitacion()){
                                Page::showMessage(1, "Se ha modificado correctamente", "indextipo.php");
                        }else{
                            throw new Exception(Database::getException());
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