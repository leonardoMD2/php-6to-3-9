
<section class="formulario">
    <h2 class="form-title">Agregar producto</h2>
    <form class="form" action="controllers/guardar.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" required>
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" step="0.01" required>
        <button class="btn-submit" type="submit">Agregar</button>
    </form>
</section>