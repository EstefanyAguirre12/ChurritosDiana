<?php
require_once("../../../app/models/cargos.class.php");
try{
    //MODIFICAR
    $dato = new Cargos;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readCargo()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['car'])){
                        if($dato->setDescripcion($_POST['des'])){
                            if($dato->updateCargo()){
                                    Page::showMessage(1, "Se ha modificado correctamente", "indexcargos.php");
                            }else{
                                throw new Exception(Database::getException());
                            }                  
                        }else{
                            throw new Exception("Nombre incorrecto");
                        }
                    }else{
                        throw new Exception("Descripcion incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "indexcargos.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecta", "indexcargos.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/cargos/modificar_view.php");
?>