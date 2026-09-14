<?php
    
    require "auth.php";
    require "../db/conexion.php";

    if (es_admin()) {

        // LÓGICA DE ELIMINAR
        $id = $_GET['id'] ?? null;

        if ($id) {
            $consulta = $conexion->prepare(
                "DELETE FROM productos WHERE id = :id"
            );

            $consulta->execute([
                ':id' => $id
            ]);

            header("Location: ../index.php?res=ok");
            exit;
        }

        header("Location: ../index.php?error=ID no válido");
        exit;

    } else {

        header("Location: ../index.php?error=No autorizado");
        exit;
    }
?>  