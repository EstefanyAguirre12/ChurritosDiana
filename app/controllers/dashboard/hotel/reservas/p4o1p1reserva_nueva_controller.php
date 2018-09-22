<?php
require_once("../../../app/models/detallerestaurante.class.php");
try{
	//Aqui va el codigo para buscar
    $nueva_orden = new Detallerestaurante;
    if(isset($_POST['guardar'])){
        if($nueva_orden->setCantida($_POST['cantidad'])){
           $nueva_orden->readCuenta($_GET['cuenta']);
           if($nueva_orden->setIdproducto($_GET['producto'])){
                if($nueva_orden->addDettalleRestaurante()){
                    Page::showMessage(1, "Se ha agregado correctamente se continuara con selecion de productos" , null);
                }else{
                    throw new Exception(Database::getException());
                }
            }else{
                throw new Exception("Este producto no existe", null);
            }
            
        }else{
            throw new Exception("ingrese una cantidad del producto", null);
        }
    }
    if(isset($_GET['cliente'])){
        if(isset($_GET['cuenta'])){
            if(isset($_GET['producto'])){
                $id_cliente = $_GET['cliente'];
                $cuenta = $_GET['cuenta'];
                if($nueva_orden->setIdproducto($_GET['producto'])){
                    $data =$nueva_orden->readProducto();
               }else{
                   throw new Exception("Este producto no existe", null);
               }   
            }else{
                throw new Exception("Error ningun producto selecionado", null);
            }
        }else{
            throw new Exception("Error ninguna cuenta selecionada", null);
        }
    }else{
        throw new Exception("Error ningun cliente selecionado", null);
    }

	if($data){
		//Se muestran los 
        require_once("../../../app/views/dashboard/hotel/reservas/p4o1p1reserva_nueva_view.php");
	}else{
		Page::showMessage(3, "No hay registros disponibles", "nueva_orden.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>