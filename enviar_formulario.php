<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $destinatario = "Cuevas@cibajaindustrial.com"; // Coloca tu dirección de correo aquí
    $asunto = "Mensaje desde formulario de contacto";

    $contenido = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje\n";

    // Envía el correo
    mail($destinatario, $asunto, $contenido);

    // Redirige de vuelta a la página de contacto
    header('Location: contacto.html');
}
?>
