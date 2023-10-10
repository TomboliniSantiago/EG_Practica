<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $consulta = $_POST["consulta"];

        $destinatario = "webmaster@generico.com"; 
        $asunto = "Consulta de contacto desde el sitio web";
        $mensaje = "Nombre: $nombre\nCorreo Electrónico: $email\nConsulta:\n$consulta";

        if (mail($destinatario, $asunto, $mensaje)) {
            echo "Gracias por tu consulta. Nos pondremos en contacto contigo pronto.";
        } else {
            echo "Hubo un error al enviar la consulta. Por favor, inténtalo de nuevo más tarde.";
        }
    } catch (Exception $e) {
        echo "Se ha producido un error generando la consulta, lo sentimos : " . $e->getMessage();
    }
} else {
    echo "No se pudo procesar la solicitud debido a un error inesperado, intente nuevamente mas tarde.";
}
?>