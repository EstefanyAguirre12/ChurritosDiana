

<?php


$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.

    include_once('conexion.php');
    $precio1=$_GET['p1'];
    $precio2=$_GET['p2'];
    $handle = $link->prepare('SELECT Estado, COUNT(IdEstadoSala)Cantidad from salas INNER JOIN estado ON estado.IdEstado = salas.IdEstadoSala WHERE costo BETWEEN ? AND ? GROUP by Estado');
    $handle->execute(array( $precio1,  $precio2));
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);

    foreach($result as $row){
        array_push($dataPoints, array("label"=> $row->Estado, "y"=> $row->Cantidad));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}



?>
