<?php
require_once("../../../app/models/producto.class.php");
try{
    //MODIFICAR
    $dato = new Producto;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readProducto()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['nom'])){
                        if($dato->setDescripcion($_POST['des'])){
                            if($dato->setIdCategoria($_POST['cat'])){
                                if($dato->setPrecio($_POST['pre'])){
                                    if($dato->setIdTipo($_POST['tip'])){
                                        if($dato->updateProducto()){
                                                Page::showMessage(1, "Se ha modificado correctamente", "indexproducto.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }                  
                                    }else{
                                        throw new Exception("Tipo incorrecto", null);
                                    }
                                }else{
                                    throw new Exception("Precio incorrecto", null);
                                }
                            }else{
                                throw new Exception("Catgegoria incorrecta", null);
                            }
                        }else{
                            throw new Exception("Descripcion incorrecta", null);
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
require_once("../../../app/views/dashboard/restaurante/registros/productos/modificar_view.php");
?>