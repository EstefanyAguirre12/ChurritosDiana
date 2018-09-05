<?php
require_once("../../../app/models/usuario.class.php");
try
{
	$object = new Usuario;
			if($object->setId($_SESSION['IdUsuario'] )){ 
				$_POST = $object->validateForm($_POST);
				if(isset($_POST['actualizar_clave'])){ 
					if($_POST['c1'] == $_POST['c2']){
						if($object->setClave($_POST['c2'])){
							if($_POST['c1'] == $_POST['c2']){
								if($_POST['c1'] == $_POST['c2']){
									if($object->setClave($_POST['c1'])){
										if($object->changePassword()){
											$object->updateFecha();
											Page::showMessage(1, "Clave cambiada", "logout.php");

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

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}


require_once("../../../app/views/dashboard/page/90dias_view.php");
?>