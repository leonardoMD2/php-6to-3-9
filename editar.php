<?php

require "config/conexion.php";

$id = $_GET["id"];


$consulta = $conexion->prepare("SELECT * FROM productos WHERE id = :id");
$consulta->execute([
    ':id' => $id
]);

$producto = $consulta->fetch();

?>

<?php require "partials/header.php" ?>
<body>

    <section class="formulario">
        <h2>Modificar producto</h2>
        <form class="form" action="actions/actualizar.php" method="POST">
            <input type="number" name="id" hidden value="<?= $producto["id"]; ?>">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?= $producto["nombre"]; ?>" required>
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" value="<?= $producto["stock"]; ?>" required>
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" step="0.01" value="<?= $producto["precio"]; ?>" required>
            <button class="btn-submit" type="submit">Editar</button>
        </form>
    </section>
    
</body>
</html>