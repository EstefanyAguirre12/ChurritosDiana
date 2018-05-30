<?php
require_once("../../../app/models/empleado.class.php");
try{
    //MODIFICAR
    $dato = new Empleado;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readEmpleado()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['nom'])){
                        if($dato->setApellido($_POST['ap'])){
                            if($dato->setDui($_POST['dui'])){
                                if($dato->setTelefono($_POST['tel'])){
                                    if($dato->setDireccion($_POST['dir'])){
                                        if(is_uploaded_file($_FILES['foto']['tmp_name'])){
                                            if($object->setImagen($_FILES['foto'])){
                                                if($dato->setIdcargo($_POST['car'])){
                                                    if($dato->setIdgenero($_POST['gen'])){
                                                        if($dato->updateEmpleado()){
                                                                Page::showMessage(1, "Se ha modificado correctamente", "indexempleados.php");
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
                                                throw new Exception($object->getImageError());
                                            }
                                        }else{
                                            throw new Exception("Seleccione una imagen");
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
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/empleados/modificar_view.php");
?>
