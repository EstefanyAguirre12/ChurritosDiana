<?php
require_once("../../../app/views/dashboard/registros/backup/exportar_view.php");

try{
    if(isset($_POST['exportar'])){ 
        $world_dumper = Shuttle_Dumper::create(array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'db_name' => 'barolo',
        ));
        // dump the database to gzipped file
        $world_dumper->dump('backup.sql.gz');
        Page::showMessage(1, "Descargar backup", "backup.sql.gz");


    }

}catch(Exception $error){
    echo $error->getMessage();
}


?>