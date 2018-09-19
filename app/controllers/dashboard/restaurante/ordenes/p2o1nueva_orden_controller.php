
<?php
require_once("../../../app/models/ente.class.php");
try{
	 //Insertar
	$dato = new Ente;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['nom'])){
			if($dato->setApellido($_POST['ap'])){
				if($dato->setDocIdentidad($_POST['dui'])){
					if($dato->setTelefono($_POST['tel'])){
						if($dato->setCorreo($_POST['cor'])){
							if($dato->setIdtipo($_POST['tip'])){
								if($dato->setIdgenero($_POST['gen'])){
									if($dato->createEnte()){
											$dato->setDocIdentidad($_POST['dui']);
											$dato->LastCliente();
											$id_cliente = $dato->getId();
											Page::showMessage(1, "Se ha insertado correctamente se continuara con selecion de productos" , "p3nueva_orden.php?cliente=$id_cliente");
									}else{
										throw new Exception(Database::getException());
									}
								}else{
									throw new Exception("Genero incorrecto", null);
								}
							}else{
								throw new Exception("Tipo incorrecto", null);
							}
						}else{
							throw new Exception("Correo incorrecto", null);
						}
					}else{
						throw new Exception("Telefono incorrecto", null);
					}
				}else{
					throw new Exception("DUI incorrecto", null);
				}
			}else{
				throw new Exception("Apellidos incorrecto", null);
			}
		}else{
			throw new Exception("Nombre incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/restaurante/ordenes/p2o1nueva_orden_view.php");
?>