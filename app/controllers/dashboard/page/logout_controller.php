<?php
require_once("../../../app/models/usuario.class.php");
$object = new Usuario;
if(isset($_SESSION['IdUsuario'])){
    if($object->setId($_SESSION['IdUsuario'])){
            if($object->readEstadoSesion()){
            $Id_estado= $object->getestado_sesion();
            if($Id_estado==1){
                $offEstadoSesion=0;
                if($object->setestado_sesion($offEstadoSesion)){
                    $object->updateEstadoSesion();
                    //cierro sesion
                    if($object->logOut()){
                        Page::showMessage(1, "Autenticación eliminada", "../../../dashboard/otros/page/login.php");
                    }else{
                        Page::showMessage(2, "Ocurrió un problema", null);
                    }
                }
            }
            elseif($Id_estado!=1){
                //cierro sesion
                if($object->logOut()){
                    Page::showMessage(3, "Alguien mas intento iniciar sesion con este mismo usuario, por razones de seguridad se suspendera este usuario", "index.php");
                }else{
                    Page::showMessage(2, "Ocurrió un problema", null);
                }
            }
        }
        else{
            throw new Exception("No se cargaron los datos");    
        } 
    }
    else{
        Page::showMessage(2, "Error al cargar del usuario", "index.php");

    }
}
else{
    Page::showMessage(2, "Error al cargar del usuario", "index.php");
}
?>
