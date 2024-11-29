<?php
include("conexion_emplea.php");
$con = connection();

$id_produc = $_POST["id"];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];


$stmt = $con->prepare("INSERT INTO productos (id, producto, marca, cantidad, precio, descripcion, categoria) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ississs", $id_produc, $producto, $marca, $cantidad, $precio, $descripcion, $categoria);

if ($stmt->execute()) {
    header("Location: empleados.php");
} else {
    echo "Error: Los datos ingresados estan erroneos " . $stmt->error;
}

$stmt->close();
$con->close();
?>


<!--

?php
include("conexion_emplea.php");
$con = connection();

$id_produc = $_POST["id"];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];


$sql = "INSERT INTO productos VALUES('$id_produc','$producto','$marca','$cantidad','$precio',' $descripcion','$categoria')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: empleados.php");
}else{
    echo "Error: ";
}
$con->close();
?

-->
