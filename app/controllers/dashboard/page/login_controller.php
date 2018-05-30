<?php
require_once("../../../app/models/usuario.class.php");
try
{
    $login = new Usuario;
    if($login->getUsuario()){
        if(isset($_POST['entrar'])){
            $_POST = $login->validateForm($_POST);
            if($login->setNombre($_POST['usuario'])){
                if($login->checkUsuario()){
                    if($login->setClave($_POST['contraseña'])){
                        if($login->checkClaveUsuario()){
                            $_SESSION['IdUsuario'] = $login->getId();
                            $_SESSION['NombreUsuario'] = $login->getNombre();
                            $_SESSION['cargo'] = $login->getCargo();
                            Page::showMessage(1, "Autenticación correcta", "index.php");
                        }
                        else
                        {
                            Page::showMessage(3,"Contraseña inexistente",null);
                        }
                    }
                    else
                    {
                        Page::showMessage(3,"Contraseña menor de 6 caracteres",null);
                    }
                }
                else
                {
                    Page::showMessage(3,"Usuario inexistente",null);
                }
            }
            else
            {
                Page::showMessage(3,"Usuario incorrecto",null);
            }
        }
    }
    else{
        Page::showMessage(3, "No hay usuarios disponibles", null);
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}


require_once("../../../app/views/dashboard/page/login_view.php");
?>