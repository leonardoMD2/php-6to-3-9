<?php

require "../db/conexion.php";

$nombre = $_POST['nombre'];
$stock = (int)$_POST['stock'];
$precio = (float)$_POST['precio'];

if(empty($nombre) || empty($stock) || empty($precio)) {
    die("Todos los campos son obligatorios");
}

$consulta = $conexion->prepare("INSERT INTO productos (nombre, stock, precio) VALUES (:nombre, :stock, :precio)");
$consulta->execute([
    ':nombre' => $nombre,
    ':stock' => $stock,
    ':precio' => $precio
]);

header("Location: ../index.php");

?>