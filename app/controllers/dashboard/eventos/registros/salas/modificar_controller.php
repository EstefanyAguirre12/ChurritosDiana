<?php
require_once("../../../app/models/salas.class.php");
try{
    //MODIFICAR
    $dato = new Salas;
    if(isset($_GET['id'])){
        if($dato->setId($_GET['id'])){
            if($dato->readSala()){
                if(isset($_POST['modificar'])){
                    $_POST = $dato->validateForm($_POST);
                    if($dato->setNombre($_POST['nom'])){  
                        if($dato->setDescripcion($_POST['des'])){ 
                            if($dato->setCapacidad($_POST['cap'])){  
                                if($dato->setCosto($_POST['cos'])){  
                                    if($dato->updateSala()){
                                            Page::showMessage(1, "Se ha modificado correctamente", "indexsala.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }  
                                }else{
                                    throw new Exception("Costo incorrecta");
                                }   
                            }else{
                                throw new Exception("Capacidad incorrecta");
                            }   
                        }else{
                            throw new Exception("Descripcion incorrecta");
                        }                
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Registro inexistente", "indexsala.php");
            }
        }else{
            Page::showMessage(2, "Registro incorrecto", "indexsala.php");
        }
    }else{
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/eventos/registros/salas/modificar_view.php");
?>