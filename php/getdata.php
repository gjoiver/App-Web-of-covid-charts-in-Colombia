<?php
require('config.php');
require('utils.php');

$headers = array(
    'Accept: application/json',
    'Content-type: application/json',
    "X-App-Token: " . '4q8h5qvef5cDWSIs1tUCDjgK6'
    );
    $cliente =curl_init("https://www.datos.gov.co/resource/gt2j-8ykr.json?departamento=C%C3%B3rdoba&\$limit=50000");
    curl_setopt($cliente, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($cliente);
    $array=json_decode($response,true);
    $cont=0;
    foreach((array) $array as $value){
        $dbConn =  connect($db);
        $id_de_caso=$value['id_de_caso'];
        $fecha_de_notificaci_n=$value['fecha_de_notificaci_n'];
        $c_digo_divipola=$value['c_digo_divipola'];
        $ciudad_de_ubicaci_n=$value['ciudad_de_ubicaci_n'];
        $departamento=$value['departamento'];
        $atenci_n=$value['atenci_n'];
        $edad=$value['edad'];
        $sexo=$value['sexo'];
        $tipo=$value['tipo'];
        $estado=$value['estado'];
        $fis=$value['fis'];
        $fecha_diagnostico=$value['fecha_diagnostico'];
        $fecha_recuperado=$value['fecha_recuperado'];
        $fecha_reporte_web=$value['fecha_reporte_web'];
        $tipo_recuperaci_n=$value['tipo_recuperaci_n'];
        $codigo_departamento=$value['codigo_departamento'];
        $pertenencia_etnica=$value['pertenencia_etnica'];
        $ubicaci_n_recuperado=$value['ubicaci_n_recuperado'];

        $query_insert = "INSERT INTO casos(id_de_caso,fecha_de_notificaci_n,c_digo_divipola, ciudad_de_ubicaci_n, departamento, atenci_n, edad, sexo, tipo, estado, fis, fecha_diagnostico,
        fecha_recuperado,fecha_reporte_web, tipo_recuperaci_n, codigo_departamento, pertenencia_etnica, ubicaci_n_recuperado)
        VALUES('$id_de_caso','$fecha_de_notificaci_n', '$c_digo_divipola','$ciudad_de_ubicaci_n','$departamento','$atenci_n','$edad','$sexo', '$tipo','$estado','$fis','$fecha_diagnostico',
        '$fecha_recuperado','$fecha_reporte_web','$tipo_recuperaci_n','$codigo_departamento','$pertenencia_etnica','$ubicaci_n_recuperado')";
         $statement = $dbConn->prepare($query_insert);
         $statement->execute();
        
    }
    
?>