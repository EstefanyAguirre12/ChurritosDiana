<?php
require_once("../../../app/models/usuario.class.php");
function ClaveNueva($length = 5) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length);
}
try{
	 //Insertar
	$nueva= ClaveNueva();
	$dato = new Usuario;
	 $codi =0;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['usu'])){
			if($dato->setIdempleado($_POST['em'])){
				if($_POST['c1'] == $_POST['c2']){
					if($dato->setClave($_POST['c1'])){
						$response_recaptcha = $_POST['g-recaptcha-response'];
						if(isset($response_recaptcha)&& $response_recaptcha){
							$secret= "6LerlG0UAAAAAOVz9KN_mw72NSssn6f022LpbSRR";
							$ip = $_SERVER['REMOTE_ADDR'];
							$validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
							if ($validation_server!= null) {
						if($dato->setCodigo($nueva)){
						 if($dato->createUsuario()){

							Page::showMessage(1, "Se ha insertado correctamente, su codigo es $nueva" , "login.php");
						}else{
							throw new Exception(Database::getException());
						}
					}else{
						throw new Exception("Error con el codigo", null);
					}
				}else{
						throw new Exception("Error al confirmar tu REcaptcha!");
					}
				}else{
					throw new Exception("Captcha erroneo amigo!");
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

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/page/usuario_view.php");
?>
