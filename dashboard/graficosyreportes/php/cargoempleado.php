

<?php


$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Aqui se crea la conexion.

    include_once('conexion.php');

    //Aqui es de donde se pone la consulta
    $handle = $link->prepare('SELECT cargos.NombreCargo , COUNT(NombreEmpleado) AS Cantidad
                              from empleados INNER JOIN cargos
                              ON empleados.IdCargo=cargos.IdCargo
                              GROUP BY NombreCargo');
    $handle->execute();
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);

    //se definen los parametros de que ocupara la grafica y se crea un each row para que lo haga por cada registro
    foreach($result as $row){
        array_push($dataPoints, array("label"=> $row->NombreCargo, "y"=> $row->Cantidad));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}



?>
