<?php
 include "db.php";
//Esta es la consulta SQL 

session_start();
   $data = array();
$Nombre = $_GET['usuario'];
$clave = $_GET['contrasena'];

$sql = "select Clave, count(IdUsuario) as id1,IdUsuario from huespedusuario where Usuario = '$Nombre' ";
$q = mysqli_query($con, $sql);
$row=mysqli_fetch_object($q);

if(password_verify($clave , $row->Clave)){
  $data[] = $row;
  if($data){ 
    echo json_encode($data);
  }
  else{
    echo (0);
  }
}else{
  echo (0);
}

 ?>
