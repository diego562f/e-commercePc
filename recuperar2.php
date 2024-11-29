<?php

include("conexion_emplea.php");
$con = connection();

$id=$_POST["id"];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$id_cargo = $_POST['id_cargo'];
$correo = $_POST['correo'];

$sql="UPDATE usuarios SET usuario='$usuario', clave='$clave', id_cargo='$id_cargo', correo='$correo' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: recuperar.php");
}else{

}

?>