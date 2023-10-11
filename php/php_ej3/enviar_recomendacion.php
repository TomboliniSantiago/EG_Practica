<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $nombre_amigo = $_POST["nombre_amigo"];
    $correo_amigo = $_POST["correo_amigo"];

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || !filter_var($correo_amigo, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, introduce direcciones de correo electrónico válidas.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $nombre) || !preg_match("/^[a-zA-Z\s]+$/", $nombre_amigo)) {
        echo "Por favor, introduce nombres válidos (solo letras y espacios).";
    } else {
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host = 'smtp.servidorgenerico.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mailgenerico@dominiogeneric.com';
        $mail->Password = 'passgenerica';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        
        $mail->setFrom($correo, $nombre);
        $mail->addAddress($correo_amigo, $nombre_amigo);
        
        $mail->isHTML(true);
        $mail->Subject = "$nombre te recomienda nuestro sitio web";
        $mail->Body = "Hola $nombre_amigo,<br><br>Te recomiendo el siguiente sitio, estoy seguro de que te va a gustar!<br><br><a href='https://www.bocaconsiguelaseptima.com'>https://www.bocaconsiguelaseptima.com</a><br><br>Saludos,<br>$nombre";

        if ($mail->send()) {
            echo "Gracias por recomendar nuestro sitio a tu amigo.";
        } else {
            echo "Hubo un error al enviar la recomendación. Por favor, inténtalo de nuevo más tarde.";
        }
    }
} else {
    echo "No se pudo procesar la solicitud, intente nuevamente más tarde";
}
?>