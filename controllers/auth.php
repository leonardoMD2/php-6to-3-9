<?php

session_start();

function es_admin() {
    #si es admin -> true; sino false
    if(isset($_SESSION["rol"]) && $_SESSION["rol"] == "admin"){
        return true;
    }else{
        header("Location: ../index.php?error=No autorizado");
        exit();
    }
}



?>