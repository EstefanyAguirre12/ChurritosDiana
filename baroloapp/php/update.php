<?php
 include "db.php";
 $IdU=$_POST['IdUsuario'];
 
 $q=mysqli_query($con,"Update pedidohabitacion pe set pe.Estado= 1 where pe.IdCuenta=(SELECT c.IdCuenta from cuentatotal c, huespedusuario h where c.IdEnte = h.IdHuesped and h.IdUsuario=$IdU)");
 if($q)
  echo "success";
 else
  echo "error";
 
?>