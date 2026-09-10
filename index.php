<?php
require "db/conexion.php";
session_start();

$resultado = $conexion->query('SELECT * FROM productos');

$res = $_GET["res"] ?? "";
?>

<?php require "partials/header.php" ?>
<body>
    <h1>Clase 15 - CRUD con PHP</h1>

    <style>
        .res{
            background-color: #d4edda;
            color: #155724;
            max-width: fit-content ;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
    <?php if($res == "ok"): ?>
        <p class="res">El producto se actualizó correctamente</p>
    <?php endif; ?>
    <?php if(isset($_GET["error"])): ?>
        <p class="res"><?= $_GET["error"] ?></p>
    <?php endif; ?>
    <main>
    <h2>Lista de productos</h2>
    <section class="productos">
    <?php foreach ($resultado as $producto): ?>
        <article class="producto">
            <h3><?= $producto['nombre']; ?></h3>
            <p>Stock disponible: <?= $producto['stock']; ?></p>
            <p>$<?= $producto['precio']; ?></p>
            <a href="editar.php?id=<?= $producto['id']; ?>">Editar</a>
            <a href="controllers/eliminar.php?id=<?= $producto['id']; ?>">Eliminar</a>
        </article>
    <?php endforeach; ?>
    </section>
    <?php require "partials/formAgregarProducto.php"; ?>
</main>
</body>
</html>