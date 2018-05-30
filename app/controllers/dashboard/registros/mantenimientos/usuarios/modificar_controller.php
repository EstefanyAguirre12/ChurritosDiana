<?php
require_once("../../../app/models/usuario.class.php");
try{
    //MODIFICAR
    $dato = new Usuario;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readUsuario()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['usu'])){
                        if($dato->setIdempleado($_POST['em'])){
                            if($_POST['c1'] == $_POST['c2']){
                                if($dato->setClave($_POST['c1'])){
                                    if($dato->updateUsuario()){
                                            Page::showMessage(1, "Se ha modificado correctamente", "indexusuarios.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }                  
                                }else{
                                    throw new Exception("Clave Incorrecta", null);
                                }
                            }else{
                                throw new Exception("Claves diferentes", null);
                            }
                        }else{
                            throw new Exception("Empleado incorrecto", null);
                        }
                    }else{
                        throw new Exception("Usuario incorrecto", null);
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "indexusuarios.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecta", "indexusuarios.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/usuarios/modificar_view.php");
?>