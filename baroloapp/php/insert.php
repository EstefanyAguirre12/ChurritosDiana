<?php
 include "db.php";
 $cant=$_POST['cantidad'];
 $IdP=$_POST['IdP'];
 $IdU =$_POST['IdU'];

 $q=mysqli_query($con,"INSERT INTO pedidohabitacion(IdProducto ,IdCuenta, Estado , Cantidad) VALUES('$IdP',(Select c.IdCuenta from cuentatotal c, huespedusuario e WHERE c.IdEnte = e.IdHuesped and e.IdUsuario=$IdU ) ,0, $cant)");
 
 if($q)
  echo "success";
 else
  echo "error";
 
?>

