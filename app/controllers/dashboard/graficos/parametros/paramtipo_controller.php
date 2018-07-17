<?php
require_once("../../../app/models/tipoproducto.class.php");

try{

	$dato = new Tipoproducto;
	if(isset($_POST['aceptar'])){
		
		$P1= $_POST['tipos'];
		Page::showMessage(1, "Parametros validos ", "../graficos/prodxtipo.php?p1=$P1");

	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/graficos/parametros/paramtipo_view.php");
?>