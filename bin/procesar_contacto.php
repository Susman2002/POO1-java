<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Aquí puedes hacer el procesamiento del formulario
// Ejemplo: enviar un correo electrónico (esto requiere configuración del servidor)
$to = "contacto@tuempresa.com";
$subject = "Mensaje de $nombre desde el formulario de contacto";
$body = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
$headers = "From: $email";

// Simular el envío de un correo
if (mail($to, $subject, $body, $headers)) {
    echo "<script>
            alert('Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.');
            window.location.href='contacto.php';
          </script>";
} else {
    echo "<script>
            alert('Hubo un problema al enviar el mensaje. Por favor, inténtalo más tarde.');
            window.location.href='contacto.php';
          </script>";
}
?>
