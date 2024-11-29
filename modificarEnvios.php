<?php

include("conexion_emplea.php");
$con = connection();

$id=$_POST["id"];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$direccion = $_POST['direccion'];
$fecha_env = $_POST['fecha_envio'];

$sql="UPDATE envios SET producto='$producto', marca='$marca', cantidad='$cantidad', direccion='$direccion', fecha_envio='$fecha_env' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: empleados.php");
}else{

}

?>
