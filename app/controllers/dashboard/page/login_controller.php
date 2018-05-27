<?php
require_once("../../../app/models/usuario.class.php");
try
{
    $login = new Usuario;
    if($login->getUsuario())
    {
        if(isset($_POST['entrar']))
        {
            $_POST = $login->validateForm($_POST);
            if($login->setNombre($_POST['usuario']))
            {
                if($login->checkUsuario())
                {
                    if($login->setClave($_POST['contraseña']))
                    {
                        if($login->checkClaveUsuario())
                        {
                            session_start();
                            $_SESSION['IdUsuario'] = $login->getId();
                            $_SESSION['NombreUsuario'] = $login->getNombre();
                            Page::showMessage(1, "Autenticación correcta", "index.php");
                        }
                        else
                        {
                            throw new Exception("Contraseña inexistente");
                        }
                    }
                    else
                    {
                        throw new Exception("Contraseña menor de 6 caracteres");
                    }
                }
                else
                {
                    throw new Exception("Usuario inexistente");
                }
            }
            else
            {
                throw new Exception("Usuario incorrecto");
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