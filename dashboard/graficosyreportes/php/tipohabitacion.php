

<?php


$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Aqui se crea la conexion.

    include_once('conexion.php');

    //Aqui es de donde se pone la consulta
    $handle = $link->prepare('SELECT TipoHabitacion, COUNT(habitaciones.IdTipoHabitacion)Cantidad from tipohabitacion INNER JOIN habitaciones on habitaciones.IdTipoHabitacion=tipohabitacion.IdTipoHabitacion GROUP BY tipohabitacion');
    $handle->execute();
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);

    //se definen los parametros de que ocupara la grafica y se crea un each row para que lo haga por cada registro
    foreach($result as $row){
        array_push($dataPoints, array("label"=> $row->TipoHabitacion, "y"=> $row->Cantidad));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}



?>
