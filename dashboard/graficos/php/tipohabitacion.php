

<?php


$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.

    include_once('conexion.php');

    $handle = $link->prepare('SELECT TipoHabitacion, COUNT(habitaciones.IdTipoHabitacion)Cantidad from tipohabitacion INNER JOIN habitaciones on habitaciones.IdTipoHabitacion=tipohabitacion.IdTipoHabitacion GROUP BY tipohabitacion');
    $handle->execute();
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);

    foreach($result as $row){
        array_push($dataPoints, array("label"=> $row->TipoHabitacion, "y"=> $row->Cantidad));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}



?>
