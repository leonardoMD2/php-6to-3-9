<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require "controllers/auth.php";
?>

<nav>
    <?php if(es_admin()): ?>
        <a href="">Cerrar Sesion</a>
    <?php endif; ?>
        <a href="../login.php">Iniciar Sesion</a>
</nav>