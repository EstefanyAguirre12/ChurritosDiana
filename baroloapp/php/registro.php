<?php
 include "db.php";
 $us=$_POST['Us'];
 $cont=$_POST['Con'];
 $num =$_POST['Num'];
 $cod =$_POST['Cod'];
 $hash = password_hash($cont, PASSWORD_DEFAULT);
 $q=mysqli_query($con,"INSERT INTO huespedusuario(Clave ,NumeroHab, IdHuesped , Usuario) VALUES('$hash',$num ,$cod, '$us')");
 
 if($q)
  echo "success";
 else
  echo "error";
 
?>

