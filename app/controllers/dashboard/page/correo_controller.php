<?php
require_once("../../../app/models/usuario.class.php");
require_once("../../../app/helpers/correos/envioCorreo.php");

try{
	$object = new Usuario;
	if($object->getUsuarios()){
        if(isset($_POST['entrar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setDUI($_POST['dui'])){
					if($object->checkDUI()){
							$id  = $object->getId();
							$email_envio= $object->getCorreo();
							$email = new email("Netbook","netbook.enterprise@gmail.com","29175229");
							//$email->agregar($_POST["danicxjk@gmail.com"],$_POST["Daniel"]);
							$hora = date('H:i');
							$token = hash('sha256', $hora.$id);
							$_SESSION['token_borolo'] = $token;
							$email->agregar($email_envio,"Empleado Barolo");
							$contenido_html =  "<div>
							<p >
							Para recuperar su contraseña en ingrese a la sigiente direccion
							</p>
							<p> 'http://localhost/barolo/dashboard/otros/page/recuperar.php?token=$token&id=$id' </p>
							</div>";
							if ($email->enviar('Recuperacion de contraseña',$contenido_html)){
									Page::showMessage(1, "Se envio un correo para restaurar su contraseña", "");

							}else{
									Page::showMessage(3, "Ocurrio un error al enviar el correo de restauracion de contraseña", "");
							}
					}else{
							throw new Exception("Este DUI no pertenece a ninguna cuenta");
					}
			}else{
					throw new Exception("Correo es invalido");
			}

		}
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}


require_once("../../../app/views/dashboard/page/correo_view.php");
?>
