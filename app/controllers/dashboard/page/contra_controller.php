<?php
require_once("../../../app/models/usuario.class.php");
try{
    //Aqui va el codigo para modificar contrasenas
    if(isset($_POST['modificar'])){
        $usuario = new Usuario;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId($_SESSION['IdUsuario'])){
            if($_POST['c1'] == $_POST['c2']){
                if($usuario->setClave($_POST['c2'])){
                    if($_SESSION['Clave'] != $_POST['c1']){
                        if($_POST['c1'] == $_POST['c2']){
                            if($_POST['c1'] != $_SESSION['NombreUsuario']){
                                if($_POST['c1'] == $_POST['c2']){
                                    if($usuario->setClave($_POST['c1'])){
                                        if($usuario->changePassword()){
                                            Page::showMessage(1, "Clave cambiada", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Clave nueva menor a 6 caracteres");
                                    }
                                }else{
                                    throw new Exception("Claves diferentes");
                                }
                            }else{
                                throw new Exception("La clave no puede ser igual a tu Usuario");
                            }
                        }else{
                            throw new Exception("Claves nuevas diferentes");
                        }
                    }else{
                        throw new Exception("Clave actual igual a la clave nueva");
                    }
                }else{
                    throw new Exception("Clave menor a 6 caracteres");
                }
            }else{
                throw new Exception("Claves diferentes");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/page/contra_view.php");
?>