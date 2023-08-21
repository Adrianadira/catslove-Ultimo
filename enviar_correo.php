<?php

$para  = 'adriana@example.com'; // Destinatario

// título
$título = 'Mensaje del Cliente'; // Conexión

// mensaje
$mensaje = '
<html>
<head>
  <title>Correo de contacto</title>
</head>
<body>
  <p>Información:</p>
  <p>Nombre: '.$_POST["nombre"].'</p>
  <p>Teléfono: '.$_POST["telefono"].'</p>
  <p>Correo: '.$_POST["correo"].'</p>
  <p>Mensaje: '.$_POST["mensaje"].'</p>
</body>
</html>
';

// Para enviar un correo HTML, se establece la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Envío
mail($para, $título, $mensaje, $cabeceras);
?>