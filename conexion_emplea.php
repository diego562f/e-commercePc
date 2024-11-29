<?php

function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $bd = "ecommerce";

    $connect=mysqli_connect($servername, $username, $password);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>