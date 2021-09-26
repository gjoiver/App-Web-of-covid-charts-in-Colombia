<?php
require('config.php');
require_once('utils.php');
$dbConn =  connect($db);
    function enviarDatos($id_de_caso,$fecha_de_notificaci_n,$c_digo_divipola,$ciudad_de_ubicaci_n,$departamento,$atenci_n){
        
        
		$query_insert = "INSERT INTO casos(id_de_caso,fecha_de_notificaci_n,c_digo_divipola, ciudad_de_ubicaci_n, departamento, atenci_n)
        VALUES('$id_de_caso','$fecha_de_notificaci_n', '$c_digo_divipola','$ciudad_de_ubicaci_n','$departamento','$atenci_n')";
    $statement = $dbConn->prepare($query_insert);
    bindAllValues($statement, $input);
    $statement->execute();
    
    
	}
	 
    

?>