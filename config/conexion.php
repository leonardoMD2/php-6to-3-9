<?php
$servidor = "localhost";
$usuario = "root";
$clave = ""; #por defecto viene en blanco
$basedatos = "tienda";
try { 
    $conexion = new PDO("mysql:host=$servidor;dbname=$basedatos;charset=utf8", $usuario, $clave);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>