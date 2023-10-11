<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $consulta = $_POST["consulta"];

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.servidorgenerico.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mailgenerico@dominiogeneric.com';
        $mail->Password = 'passgenerica';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($email, $nombre);
        $mail->addAddress('webmaster@generico.com');
        
        $mail->isHTML(false);
        $mail->Subject = "Consulta de contacto desde el sitio web";
        $mail->Body = "Nombre: $nombre\nCorreo Electrónico: $email\nConsulta:\n$consulta";

        if ($mail->send()) {
            echo "Gracias por tu consulta. Nos pondremos en contacto contigo pronto.";
        } else {
            echo "Hubo un error al enviar la consulta. Por favor, inténtalo de nuevo más tarde.";
        }
    } catch (Exception $e) {
        echo "Se ha producido un error generando la consulta, lo sentimos: " . $e->getMessage();
    }
} else {
    echo "No se pudo procesar la solicitud debido a un error inesperado, inténtelo nuevamente más tarde.";
}
?>