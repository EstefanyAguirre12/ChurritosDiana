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
						if($dato->setCodigo($nueva)){
						 if($dato->createUsuario()){

							Page::showMessage(1, "Se ha insertado correctamente, su codigo es $nueva" , "indexusuarios.php");
						}else{
							throw new Exception(Database::getException());
						}
					}else{
						throw new Exception("Error con el codigo", null);
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
require_once("../../../app/views/dashboard/registros/mantenimientos/usuarios/agregar_view.php");
?>
