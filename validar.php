<?php
session_start();
include 'conexiones.php';

$username = $_POST['usuario'];
$password = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE usuario='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['clave'])) {
        $_SESSION['usuario'] = $username;
        $_SESSION['id_cargo'] = $row['id_cargo'];
        if ($row['id_cargo'] == '1') {
            header("Location: empleados.php");
        } else if ($row['id_cargo'] == '2')  {
            header("Location: clientes.php");
        }
    } else {
        echo "La contraseña o el usuario pueden estar mal ingresados.";
    }
} else {
    echo "El usuario no existe dentro de la base de datos.";
}
?>
