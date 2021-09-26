<?php

header('Content-Type: application/json');


       include('Config.php');
       include ('Utils.php');
      $dbConn =  connect($db);

      
      $sql = $dbConn->prepare("SELECT ciudad_de_ubicaci_n, COUNT(*) as atenci_n from casos where atenci_n = 'Recuperado' group by ciudad_de_ubicaci_n");
      $sql->execute();
      $data=$sql->fetchAll(PDO::FETCH_ASSOC);
      echo json_encode($data);
            

?>

