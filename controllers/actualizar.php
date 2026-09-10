<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../db/conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$stock = $_POST["stock"];
$precio = $_POST["precio"];


$consulta = $conexion->prepare("UPDATE productos SET nombre = :nombre, stock = :stock, precio = :precio WHERE id = :id");
$consulta->execute([
    ':id' => $id,
    ':nombre' => $nombre,
    ':stock' => $stock,
    ':precio' => $precio,
]);

header("Location: ../index.php?res=ok")


?>