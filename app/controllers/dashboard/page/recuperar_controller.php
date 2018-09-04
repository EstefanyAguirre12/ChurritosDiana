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
					if($_POST['clave1'] == $_POST['clave2']){            
						if($object->setClave($_POST['clave1'])){
							$clave= $object->changePassword();
							if($clave){
								unset($_SESSION['token_borolo']);  
								Page::showMessage(1, "El registro se modifico correctamente","login.php" );
							}
							else{
								Page::showMessage(2, "No se inserto", null);
							}
						}	
					}
					else{
						Page::showMessage(2, "La claves no coinciden", null);
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