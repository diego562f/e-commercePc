<?php

include("conexion_emplea.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM envios WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: empleados.php");
}else{

}

?>
