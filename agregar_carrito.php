<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if (isset($_GET['nombre']) && isset($_GET['precio'])) {
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];

    $_SESSION['carrito'][] = ['nombre' => $nombre, 'precio' => $precio];
}

header('Location: index.php');
exit();
