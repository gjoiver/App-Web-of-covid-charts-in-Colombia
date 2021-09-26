<?php

header('Content-Type: application/json');


       include('Config.php');
       include ('Utils.php');
      $dbConn =  connect($db);

      
      $sql = $dbConn->prepare("SELECT sexo, COUNT(*) from casos GROUP BY sexo");
      $sql->execute();
      $data=$sql->fetchAll(PDO::FETCH_ASSOC);
      echo json_encode($data);
            

?>

