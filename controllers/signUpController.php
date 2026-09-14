<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../db/conexion.php";

$usuario = $_POST['username'];
$password = $_POST['password'];
$rol = $_POST['rol'];


if(empty($usuario) || empty($password) || empty($rol)) {
    die("Todos los campos son obligatorios");
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);


$consulta = $conexion->prepare("INSERT INTO usuarios (usuario, contrasena, roll) VALUES (:usuario, :contrasena, :roll)");
$consulta->execute([
    ':usuario' => $usuario,
    ':contrasena' => $passwordHash,
    ':roll' => $rol
]);

header("Location: ../index.php");



?>