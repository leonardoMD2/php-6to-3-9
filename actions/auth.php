<?php

session_start();

function esta_logeado() {
    return isset($_SESSION["usuario"]);
}

function es_admin() {
    return isset($_SESSION["rol"]) && $_SESSION["rol"] === "admin";
}

?>  