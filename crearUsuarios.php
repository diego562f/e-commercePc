<?php
include("conexion_emplea.php");
$con = connection();

$id=$_POST["id"];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$id_cargo = $_POST['id_cargo'];
$correo = $_POST['correo'];

$sql = "INSERT INTO usuarios VALUES('$id','$usuario','$clave','$id_cargo','$correo')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: empleados.php");
}else{

}

?>