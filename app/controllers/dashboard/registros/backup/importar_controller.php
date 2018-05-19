<?php
require_once("../../../app/views/dashboard/registros/backup/importar_view.php");
try{
    if(isset($_POST['importar'])){ 
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "barolo";
        $formatos   = array('.sql');
        $directorio = '../../../web/backup'; 
        $nombreArchivo    = $_FILES['archivo']['name'];
		$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
		$ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
		if (in_array($ext, $formatos)){
			if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
                Page::showMessage(1, "Felicitaciones, archivo $nombreArchivo subido exitosamente", null);
			}else{
				Page::showMessage(2, "Error al cargar el archivo", null);
			}
		}else{
			Page::showMessage(3, "El tipo de archivo no es valido", null);
		}
        $path      = "../../../web/backup/";
        $filename  = $path.$nombreArchivo; // Filename of dump, default: dump.sql
        $compress  = false; // Import gz compressed file, default: false
        
        $connection = @mysql_connect($dbhost,$dbuser,$dbpass);
        $dump = new phpMyImporter($dbname,$connection,$filename,$compress);
        
        $dump->utf8 = true; // Uses UTF8 connection with MySQL server, default: true
        
        $dump->doImport();

    }

}catch(Exception $error){
    echo $error->getMessage();
}
?>