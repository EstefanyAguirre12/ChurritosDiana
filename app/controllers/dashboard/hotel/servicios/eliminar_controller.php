<?php
require_once("../../../app/models/pedidohabitacion.class.php");
try{
	if(isset($_GET['IdPedido'])){
		$hab = new Pedidohabitacion;
		if($hab->setId($_GET['IdPedido'])){
			if($hab->readPedido()){
				if(isset($_POST['eliminar'])){
					if($hab->deletePedido()){
						$v= $_GET['IdUsuario'];
                        Page::showMessage(1, "Pedido listo", "h_pedidos.php?IdUsuario=$v");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Pedido inexistente");
			}
		}else{
			throw new Exception("Pedido incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione un Pedido", "habitaciones.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/servicios/eliminar_view.php");
?>