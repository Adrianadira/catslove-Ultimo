<?php
include("connection.php"); // Incluimos el archivo de conexión
$con = connection(); // Llamamos a la fuccion de conexión a la base de datos

$name = $_POST['name']; // Captura del campo nombre mediante post
$lastname = $_POST['lastname']; // Captura del campo apellido mediante post
$username = $_POST['username']; // Captura del campo username mediante post
$password = $_POST['password']; // Captura del campo contraseña mediante post
$email = $_POST['email']; // Captura del campo correo mediante post

$sql = "INSERT INTO users (`name`, `lastname`, `username`, `password`, `email`) VALUES ('$name','$lastname','$username','$password','$email')"; // Query Insertar el registro en la Base de datos
$query = mysqli_query($con, $sql); // Ejecución del insertar
mysqli_close($con);
if($query){ // Si hay respuesta se redirecciona al index
    Header("Location: index.html");
}else{ // Si no inserta mostramos el error
    echo "Error al insertar usuario";
}
?>