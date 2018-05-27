<?php
require_once("../../../app/models/lavanderia.class.php");
try{
    //MODIFICAR
    $dato = new Lavanderia;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readLavanderia()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['nom'])){
                        if($dato->setColor($_POST['col'])){
                            if($dato->setIdCategoria($_POST['cat'])){
                                if($dato->setCantidad($_POST['cant'])){
                                    if($dato->setIdMaterial($_POST['mat'])){
                                        if($dato->updateLavanderia()){
                                                Page::showMessage(1, "Se ha modificado correctamente", "indexlavanderia.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }                  
                                    }else{
                                        throw new Exception("Material incorrecto", null);
                                    }
                                }else{
                                    throw new Exception("Cantidad incorrecta", null);
                                }
                            }else{
                                throw new Exception("Categoria incorrecta", null);
                            }
                        }else{
                            throw new Exception("Color incorrecto", null);
                        }
                    }else{
                        throw new Exception("Nombre incorrecto", null);
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
require_once("../../../app/views/dashboard/lavanderia/registros/lavanderia/modificar_view.php");
?>