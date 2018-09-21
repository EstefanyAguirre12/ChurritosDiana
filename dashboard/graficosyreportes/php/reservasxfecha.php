

<?php


$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.

    include_once('conexion.php');
    $precio1=$_GET['f1'];
    $precio2=$_GET['f2'];
    $handle = $link->prepare('SELECT FechaInicio, COUNT(IdHabitacion)Cantidad FROM detallereserva  WHERE FechaInicio BETWEEN ? AND ? GROUP BY FechaInicio;    ');
    $handle->execute(array( "$precio1",  "$precio2"));
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
    if($result!=null){

    foreach($result as $row){
        array_push($dataPoints, array("label"=> $row->FechaInicio, "y"=> $row->Cantidad));
    }
    $link = null;
}else{
    Page::showMessage(2, "No hay registros con esos parametros", "../parametros/paramfecha.php");
}
}
catch(\PDOException $ex){
    print($ex->getMessage());
}



?>
