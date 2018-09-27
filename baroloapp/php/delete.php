<?php
 include "db.php";

 $id=$_POST['id'];
 $IdU=$_POST['IdUsuario'];
 $IdPe=$_POST['IdPedido'];

 $q=mysqli_query($con,"delete from pedidohabitacion where IdProducto=$id and IdPedido=$IdPe and IdCuenta =(SELECT c.IdCuenta from cuentatotal c, huespedusuario h where c.IdEnte = h.IdHuesped and h.IdUsuario=$IdU)");
 if($q)
  echo "success";
 else
  echo "error";
 
?>