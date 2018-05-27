<?php
require_once("../../../app/models/tipoente.class.php");
try{
    //MODIFICAR
    $dato = new Tipoente;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readTipoente()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['tip'])){
                        if($dato->updateTipoente()){
                                Page::showMessage(1, "Se ha modificado correctamente", "indextipoente.php");
                        }else{
                            throw new Exception(Database::getException());
                        }                  
                    }else{
                        throw new Exception("Tipo incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "indexcargos.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecta", "indexcargos.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/tipoente/modificar_view.php");
?>