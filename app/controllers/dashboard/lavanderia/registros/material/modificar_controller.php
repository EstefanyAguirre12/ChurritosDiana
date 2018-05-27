<?php
require_once("../../../app/models/material.class.php");
try{
    //MODIFICAR
    $dato = new Material;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readMaterial()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['mat'])){  
                        if($dato->updateMaterial()){
                                Page::showMessage(1, "Se ha modificado correctamente", "indexmaterial.php");
                        }else{
                            throw new Exception(Database::getException());
                        }                  
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecta", "index.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/lavanderia/registros/material/modificar_view.php");
?>