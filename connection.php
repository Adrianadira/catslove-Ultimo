<?php

function connection() {
    $host = "localhost"; // Host Base de dato
    $user = "root"; // Usuario Base de datos
    $pass = ""; // Password de usuario root
    $bd = "adopta_un_peludo"; // Nombre de la base de datos

    $connect = mysqli_connect($host, $user, $pass, $bd); // Conexión a la Base de datos

    if (!$connect) { // Si no conecta hay error
        die("Error de conexión: " . mysqli_connect_error());
    }
    // Si conecta delvuelve la conexión realizada
    return $connect;
}

?>