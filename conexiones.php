<?php
 
 function getConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Conexion fallida:". $conn->connect_error);
    }

    return $conn;
 }

?>
