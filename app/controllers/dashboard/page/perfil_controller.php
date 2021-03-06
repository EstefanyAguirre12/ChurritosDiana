<?php
require_once("../../../app/models/empleado.class.php");
try{
    //MODIFICAR
    $dato = new Empleado;
        if($dato->setId($_SESSION['IdUsuario'])){
            if($dato->readCuenta()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['nom'])){
                        if($dato->setApellido($_POST['ap'])){
                            if($dato->setDui($_POST['dui'])){
                                if($dato->setTelefono($_POST['tel'])){
                                    if($dato->setDireccion($_POST['dir'])){
                                            if($dato->setUsuario($_POST['us'])){
                                                if($dato->setIdgenero($_POST['gen'])){
                                                    if($dato->updateCuenta()){
                                                            Page::showMessage(1, "Se ha modificado correctamente", "index.php");
                                                    }else{
                                                        throw new Exception(Database::getException());
                                                    }                  
                                                }else{
                                                    throw new Exception("Genero incorrecto", null);
                                                }
                                            }else{
                                                throw new Exception("Cargo incorrecto", null);
                                            }
                    
                                    }else{
                                        throw new Exception("Direccion incorrecto", null);
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
                Page::showMessage(2, "Registro inexistente", "indexempleados.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecta", "indexempleados.php");
        }
 
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/page/perfil_view.php");
?>