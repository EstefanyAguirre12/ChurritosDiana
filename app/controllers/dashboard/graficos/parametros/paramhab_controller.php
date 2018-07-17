<?php

try{

	
	if(isset($_POST['aceptar'])){
		
		$P1= $_POST['p1'];
		$P2= $_POST['p2'];
		Page::showMessage(1, "Parametros validos ", "../graficos/habxprecio.php?p1=$P1&p2=$P2");

	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/graficos/parametros/paramhab_view.php");
?>