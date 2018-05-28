<?php
require_once("../../../app/models/empleado.class.php");
try{
	if(isset($_GET['id'])){
		$dato = new Empleado;
		if($dato->setId($_GET['id'])){
			if($dato->readEmpleado()){
				if(isset($_POST['eliminar'])){
					if($dato->deleteEmpleado()){
                        Page::showMessage(1, "Registro eliminado", "indexempleados.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Registro inexistente");
			}
		}else{
			throw new Exception("Registro incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione un registro", "indexempleados.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/empleados/eliminar_view.php");
?>