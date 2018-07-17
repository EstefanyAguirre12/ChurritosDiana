

<?php


$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.

    include_once('conexion.php');
    $precio1=$_GET['p1'];
    $handle = $link->prepare('SELECT NombreProducto, Precio FROM productos WHERE IdTipo=?');
    $handle->execute(array( $precio1));
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
