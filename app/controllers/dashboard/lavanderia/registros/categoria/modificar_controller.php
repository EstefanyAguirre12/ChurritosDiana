<?php
require_once("../../../app/models/categorialavanderia.class.php");
try{
    //MODIFICAR
    $dato = new Categorialavanderia;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readCategoria()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['cat'])){  
                        if($dato->updateCategoria()){
                                Page::showMessage(1, "Se ha modificado correctamente", "indexcategoria.php");
                        }else{
                            throw new Exception(Database::getException());
                        }                  
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "indexcategoria.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecta", "indexcategoria.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/lavanderia/registros/categoria/modificar_view.php");
?>