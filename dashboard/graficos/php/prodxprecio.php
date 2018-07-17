

<?php


$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.

    include_once('conexion.php');
    $precio1=$_GET['p1'];
    $precio2=$_GET['p2'];
    $handle = $link->prepare('SELECT NombreProducto, Precio from productos WHERE precio BETWEEN ? AND ?');
    $handle->execute(array( $precio1,  $precio2));
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);

    foreach($result as $row){
        array_push($dataPoints, array("label"=> $row->NombreProducto, "y"=> $row->Precio));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}



?>
