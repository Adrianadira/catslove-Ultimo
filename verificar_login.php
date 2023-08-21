<?php
include("connection.php"); // Incluimos el archivo de conexión
$con = connection(); // Llamamos a la fuccion de conexión a la base de datos

$username = $_POST['username']; // Captura del campo username mediante post
$password = $_POST['password']; // Captura del campo contraseña mediante post

// Query Consulta del usuario en la Base de datos
$sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

$query = mysqli_query($con, $sql); // Ejecución de la consulta
mysqli_close($con);
if($query->num_rows>0){ // Si hay coincidencia se muestra mensaje
    echo "Login exitoso";
}else{// Si no existe mostramos el error
    echo "Error al intentar login";
}
?>