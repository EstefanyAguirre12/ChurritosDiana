<?php
require_once("../../../app/models/categoriaproducto.class.php");
try{
    //MODIFICAR
    $dato = new Categoriaproducto;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readCategoriaproducto()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['cat'])){  
                        if($dato->updateCategoriaproducto()){
                                Page::showMessage(1, "Se ha modificado correctamente", "indexcategoria.php");
                        }else{
                            throw new Exception(Database::getException());
                        }                  
                    }else{
                        throw new Exception("Categoria incorrecta");
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "indexcategoria.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecto", "indexcategoria.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/restaurante/registros/categoriaproducto/modificar_view.php");
?>