<?php
require_once("../../../app/models/tipoproducto.class.php");
try{
    //MODIFICAR
    $dato = new Tipoproducto;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readTiproducto()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['tip'])){  
                        if($dato->updateTipoProducto()){
                                Page::showMessage(1, "Se ha modificado correctamente", "indextipo.php");
                        }else{
                            throw new Exception(Database::getException());
                        }                  
                    }else{
                        throw new Exception("Nombre incorrecto");
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
require_once("../../../app/views/dashboard/restaurante/registros/tipoproducto/modificar_view.php");
?>