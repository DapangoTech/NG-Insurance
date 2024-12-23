<?php
// Obtener los datos del formulario
$nombre = htmlspecialchars($_POST['names']);
$telefono = $_POST['phone'];
$email = $_POST['email'];
$mensaje = htmlspecialchars($_POST['mensaje']);
 
// Procesar los datos (por ejemplo, enviar un correo electrónico)
$to = "ricardo@dapango.tech";
$subject = "Nuevo mensaje de contacto";
$message = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email\nMensaje:\n$mensaje";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
 
if (mail($to, $subject, $message, $headers)){
 echo("Mensaje listo");
}else{
 $error = error_get_last();
 echo "Error al enviar el mensaje: " . $error['message'];
}
 
// Redireccionar a una página de confirmación
header("Location: ./index.html");
exit;
?>
