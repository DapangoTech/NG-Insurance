<?php
// Obtener los datos del formulario
$nombre = htmlspecialchars($_POST['names']);
$telefono = $_POST['phone'];
$email = $_POST['email'];
$mensaje = htmlspecialchars($_POST['mensaje']);
 
// Procesar los datos (por ejemplo, enviar un correo electrónico)
$to = "ricardo@dapango.tech";
$subject = "Nuevo mensaje de contacto";
$message = "Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\nEmail: " . $email . "\nMensaje: " . $mensaje;
$headers = "From: " . $email . "\n";
 
if (mail('ricardo@dapango.tech', 'Nuevo mensaje de contacto', 'BOY', 'From: ricardo@dapango.com')){
 echo("Mensaje listo");
}else{
 echo("Error en mensaje");
}
 
// Redireccionar a una página de confirmación
header("Location: ./index.html");
exit;
?>
