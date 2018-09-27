<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select IdProducto,NombreProducto,Descripcion,Precio from productos where IdCategoria=4");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>