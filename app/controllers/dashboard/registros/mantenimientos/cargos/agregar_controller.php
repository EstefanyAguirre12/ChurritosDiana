<?php
require_once("../../../app/models/cargos.class.php");
try{
	 //Insertar
	$dato = new Cargos;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['car'])){
			if($dato->setDescripcion($_POST['des'])){
				if(isset($_POST['perm1'])){ 
					$dato->setperm1(1);
				   
				}else{
					$dato->setperm1(0);
				}
				
				if(isset($_POST['perm2'])){ 
					$dato->setperm2(1);
				   
				}else{
					$dato->setperm2(0);
				}

				if(isset($_POST['perm3'])){ 
					$dato->setperm3(1);
				   
				}else{
					$dato->setperm3(0);
				}

				if(isset($_POST['perm4'])){ 
					$dato->setperm4(1);
				   
				}else{
					$dato->setperm4(0);
				}

				if(isset($_POST['perm5'])){ 
					$dato->setperm5(1);
				   
				}else{
					$dato->setperm5(0);
				}

				if(isset($_POST['perm6'])){ 
					$dato->setperm6(1);
				   
				}else{
					$dato->setperm6(0);
				}

				if(isset($_POST['perm7'])){ 
					$dato->setperm7(1);
				   
				}else{
					$dato->setperm7(0);
				}

				if(isset($_POST['perm8'])){ 
					$dato->setperm8(1);
				   
				}else{
					$dato->setperm8(0);
				}

				if(isset($_POST['perm9'])){ 
					$dato->setperm9(1);
				   
				}else{
					$dato->setperm9(0);
				}

				if(isset($_POST['perm10'])){ 
					$dato->setperm10(1);
				   
				}else{
					$dato->setperm10(0);
				}

				if(isset($_POST['perm11'])){ 
					$dato->setperm11(1);
				   
				}else{
					$dato->setperm11(0);
				}

				if(isset($_POST['perm12'])){ 
					$dato->setperm12(1);
				   
				}else{
					$dato->setperm12(0);
				}

				if(isset($_POST['perm13'])){ 
					$dato->setperm13(1);
				   
				}else{
					$dato->setperm13(0);
				}

				if(isset($_POST['perm14'])){ 
					$dato->setperm14(1);
				   
				}else{
					$dato->setperm14(0);
				}

				
				if($dato->createCargo()){
					Page::showMessage(1, "Se ha insertado correctamente", "indexcargos.php");
				}else{
					throw new Exception(Database::getException());
				}
			}else{
				throw new Exception("Descripción incorrecta", null);
			}
		}else{
			throw new Exception("Cargo incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/cargos/agregar_view.php");
?>