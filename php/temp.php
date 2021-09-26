<?php


    function enviarDatos($id_de_caso,$fecha_de_notificaci_n,$c_digo_divipola,$ciudad_de_ubicaci_n,
    $departamento,$atenci_n,$edad,$sexo,$tipo,$estado,$fis,$fecha_diagnostico,$fecha_recuperado,$fecha_reporte_web,
    $tipo_recuperaci_n,$codigo_departamento,$pertenencia_etnica,$ubicaci_n_recuperado){
		include('config.php');
        include ('utils.php');
        $dbConn =  connect($db);
		$query_insert = "INSERT INTO casos(id_de_caso,fecha_de_notificaci_n,c_digo_divipola, ciudad_de_ubicaci_n,departamento,atenci_n,edad,sexo,tipo,estado
        fis,fecha_diagnostico,fecha_recuperado,fecha_reporte_web,tipo_recuperaci_n,codigo_departamento,pertenencia_etnica,ubicaci_n_recuperado)
        VALUES('$id_de_caso','$fecha_de_notificaci_n', '$c_digo_divipola','$ciudad_de_ubicaci_n','$departamento','$atenci_n','$edad','$sexo','$tipo','$estado',
        '$fis','$fecha_diagnostico','$fecha_recuperado','$fecha_reporte_web','$tipo_recuperaci_n','$codigo_departamento','$pertenencia_etnica','$ubicaci_n_recuperado')";
    $statement = $dbConn->prepare($query_insert);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();
    if($postId)
    {
      $input['id'] = $postId;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      exit();
	 }
  
	}
	 
    

?>