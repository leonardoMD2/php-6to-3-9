<?php
require "config/conexion.php";
// session_start();
require "actions/auth.php";

$resultado = $conexion->query('SELECT * FROM productos');

$res = $_GET["res"] ?? "";
?>

<?php require "partials/header.php" ?>
<body>

    <nav class="nav">
            <h1>Clase 15 - CRUD con PHP</h1>

            <?php if (esta_logeado()): ?>

                <p>Estás logueado como <?= $_SESSION["usuario"] ?></p>

            <?php else: ?>

                <p>No estás logueado</p>

            <?php endif; ?>

            <?php if (es_admin()): ?>

                <p>👑 Sos administrador</p>

            <?php else: ?>

                <p>👤 Sos usuario normal</p>

            <?php endif; ?>

            <section>
                <a href="login.php">Login</a>
                <a href="signUp.php">sing up</a>
            </section>
    </nav>

    <button class="btn-open">Agregar producto</button>

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
                <a href="actions/eliminar.php?id=<?= $producto['id']; ?>">Eliminar</a>
            </article>
            <?php endforeach; ?>
        </section>
        <div class="content-form">
            <button class="btn-close">X</button>
            <?php require "partials/formAgregarProducto.php"; ?>
        </div>

    </main>

    <script>
        const  nav = document.querySelector(".nav");
        const contentForm = document.querySelector(".content-form");
        const btnOpen = document.querySelector(".btn-open");
        const btnClose = document.querySelector(".btn-close");

        btnClose.addEventListener("click", () => {
            contentForm.style.display = "none";
        });

        btnOpen.addEventListener("click", () => {
            contentForm.style.display = "flex";
        });

        contolarScroll();

        /* Detener el botón antes del nav */

        window.addEventListener("scroll", () => {

            contolarScroll();

        });

        function contolarScroll() {
            const navBottom = nav.getBoundingClientRect().bottom;
            const btnTop = btnOpen.getBoundingClientRect().top;

            if (btnTop <= navBottom + 15) {
                btnOpen.style.position = "absolute";
                btnOpen.style.top = `${window.scrollY + navBottom + 15}px`;
            } else {
                btnOpen.style.position = "fixed";
                btnOpen.style.top = "25px";
            }
        }
    </script>
</body>
</html>