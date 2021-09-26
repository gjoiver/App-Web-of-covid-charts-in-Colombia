
<?php


$index="http://localhost/api";
$url='http://localhost/api/positivos';
$url2="http://localhost/api/recuperados";
$url3="http://localhost/api/fallecidos";
$url4="http://localhost/api/sexo";
$url5="http://localhost/api/edades";


header('Content-Type: application/json');

switch( strtoupper($_SERVER['REQUEST_METHOD'])) {
    case 'GET':
        if(preg_match('/\/([^\/]+)\/([^\/]+)/', $_SERVER["REQUEST_URI"], $index)){
            require('../index.html');
            
        }elseif(preg_match('/\/([^\/]+)\/([^\/]+)/', $_SERVER["REQUEST_URI"], $url)){
           require('../positivos.html');
           
        }elseif(preg_match('/\/([^\/]+)\/([^\/]+)/', $_SERVER["REQUEST_URI"], $url2)){
          require('../recuperados.html');

        }elseif(preg_match('/\/([^\/]+)\/([^\/]+)/', $_SERVER["REQUEST_URI"], $url3)){
          require('../fallecidos.html');  

        }elseif(preg_match('/\/([^\/]+)\/([^\/]+)/', $_SERVER["REQUEST_URI"], $url4)){
          require('../sexo.html');
        }
        elseif(preg_match('/\/([^\/]+)\/([^\/]+)/', $_SERVER["REQUEST_URI"], $url5)){  
            require_once('../edades.html');
        }   
        
        break;
    case 'POST':
        break;
    case 'PUT':
        break;
    case 'DELETE':
        break;
}
?>