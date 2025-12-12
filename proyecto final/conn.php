<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'bd_proyecto';

$conn =new mysqli($db_host,$db_user,$db_pass,$db_name); 

if ($conn->connect_error) {
    
    die("ERROR DE CONEXION <br> " .
    "detalles del error:( ".$conn->connect_errno.") " . $conn->connect_error);
    
}else {
    /*echo "conexion existosa a la basa de datos (".$db_name.")"." <br> ";*/
}



?>