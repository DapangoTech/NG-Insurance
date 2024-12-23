<?php
// Obtener los datos del formulario
$nombre = $_POST['names'];
$telefono = $_POST['phone'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
 
// Procesar los datos (por ejemplo, enviar un correo electrónico)
$to = "ricardo@dapango.tech";
$subject = "Nuevo mensaje de contacto";
$message = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email\nMensaje: $mensaje";
$headers = "From: $email";
 
mail($to, $subject, $message, $headers);
 
// Redireccionar a una página de confirmación
header("Location: ./index.html");
exit;
?>
