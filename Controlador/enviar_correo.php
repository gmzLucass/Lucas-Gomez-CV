<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tema = $_POST['tema'];
    $mensaje = $_POST['mensaje'];

    // Configuración del correo
    $para = 'lucasg.cabaarg@gmail.com'; // Cambia esto por tu correo
    $asunto = $tema;
    $cuerpo = "Nombre: $nombre\nTeléfono: $telefono\nCorreo: $correo\n\nMensaje:\n$mensaje";
    $headers = "From: $correo";

    // Enviar el correo
    if (mail($para, $asunto, $cuerpo, $headers)) {
        echo 'Mensaje enviado exitosamente.';
    } else {
        echo 'Error al enviar el mensaje.';
    }
} else {
    echo 'Método de solicitud no permitido.';
}
?>
