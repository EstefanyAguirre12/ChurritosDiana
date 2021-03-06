<?php
require_once("../../../app/models/usuario.class.php");
try
{
	$object = new Usuario;
	if(isset($_GET['id'])){
		$_POST = $object->validateForm($_POST);
		$token = $_GET['token'];
		if($_SESSION['token_borolo'] == $token){
			if($object->setId($_GET['id'])){ 
				if(isset($_POST['actualizar_clave'])){ 
					if($_POST['c1'] == $_POST['c2']){
						if($object->setClave($_POST['c2'])){
							if($_POST['c1'] == $_POST['c2']){
								if($_POST['c1'] == $_POST['c2']){
									if($object->setClave($_POST['c1'])){
										if($object->changePassword()){
											unset($_SESSION['token_borolo']);  
											Page::showMessage(1, "Clave cambiada", "login.php");
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
								throw new Exception("Claves nuevas diferentes");
							}
						}else{
							throw new Exception("Clave menor a 6 caracteres");
						}
					}else{
						throw new Exception("Claves diferentes");
					}
				}	
			}
		}else{
			Page::showMessage(3, "Este link esta vencido", "login.php");
		}
	}
	else{
		Page::showMessage(3, "Permiso denegado", "login.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}


require_once("../../../app/views/dashboard/page/recuperar_view.php");
?>