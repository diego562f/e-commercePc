<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conexion = mysqli_connect($servername,$username,$password,$dbname);

    if(!$con){
     echo "Conexion fallida";
    }
?>
