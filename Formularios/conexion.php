<?php

    $host = "localhost";
    $user = "root";
    $pass = "n0m3l0";

    $bd = "proyecto";

    $conexion = mysqli_connect($host, $user, $pass, $bd);

    if(!$conexion){
        echo "Conexión fallida";
    }