<?php
require_once("../../../app/models/ente.class.php");
try{
    //MODIFICAR
    $dato = new Ente;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readEnte()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['nom'])){
                        if($dato->setApellido($_POST['ap'])){
                            if($dato->setDocIdentidad($_POST['dui'])){
                                if($dato->setTelefono($_POST['tel'])){
                                    if($dato->setCorreo($_POST['cor'])){
                                        if($dato->setIdtipo($_POST['tip'])){
                                            if($dato->setIdgenero($_POST['gen'])){
                                                if($dato->updateEnte()){
                                                        Page::showMessage(1, "Se ha modificado correctamente", "indexentes.php");
                                                }else{
                                                    throw new Exception(Database::getException());
                                                }                  
                                            }else{
                                                throw new Exception("Genero incorrecto", null);
                                            }
                                        }else{
                                            throw new Exception("Tipo incorrecto", null);
                                        }
                                    }else{
                                        throw new Exception("Correo incorrecto", null);
                                    }
                                }else{
                                    throw new Exception("Telefono incorrecto", null);
                                }
                            }else{
                                throw new Exception("DUI incorrecto", null);
                            }
                        }else{
                            throw new Exception("Apellidos incorrecto", null);
                        }
                    }else{
                        throw new Exception("Nombre incorrecto", null);
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "indexentes.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecta", "indexentes.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/entes/modificar_view.php");
?>