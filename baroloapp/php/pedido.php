<?php
include "db.php";
$data=array();
$IdU =$_GET['IdUsuario'];
$q=mysqli_query($con,"select pe.IdPedido, p.IdProducto, p.NombreProducto, p.Precio, pe.Cantidad FROM productos p, pedidohabitacion pe where pe.IdProducto = p.IdProducto and pe.Estado=0 and pe.IdCuenta=(SELECT c.IdCuenta from cuentatotal c, huespedusuario h where c.IdEnte = h.IdHuesped and h.IdUsuario=$IdU)");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>