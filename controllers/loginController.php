<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require "../db/conexion.php";

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conexion->prepare(
    'SELECT *
     FROM usuarios
     WHERE usuario = ?'
);

$stmt->execute([$username]);
$user = $stmt->fetch();

if (password_verify($password, $user["contrasena"])){
    $_SESSION["usuario"] = $user["usuario"];
    $_SESSION["rol"] = $user["roll"];
    
    header("Location: ../index.php");
}else{
    header("Location: ../login.php");
}

?>