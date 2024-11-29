<?php
include("conexion_emplea.php");
$con = connection();

$id_produc=$_POST["id_produc"];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$direccion = $_POST['direccion'];
$fecha_envio = $_POST['fecha_envio'];


$sql = "INSERT INTO envios VALUES('$id_produc','$producto','$marca','$cantidad','$direccion','$fecha_envio')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: empleados.php");
}else{

}

?>