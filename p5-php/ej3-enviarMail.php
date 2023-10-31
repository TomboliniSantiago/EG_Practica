<?php
    if (!empty($_POST['nombre']) && !empty($_POST['email1']) && !empty($_POST['email2'])) {
        $nombre = $_POST['nombre'];
        $asunto = "Recomendacion Sitio Web";
        $desde = $_POST['email1'];
        $destino = $_POST['email2'];
        $headers = "From: noreply@example.com\r\n";
        $headers = "Reply-To: noreply@example.com\r\n";
        $headers = "MIME-Version: 1.0\r\n";
        $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
        
        if (mail($destino, $asunto, $htmlContent, $headers)) { 
            echo 'Correo electrónico enviado correctamente.'; 
        } else { 
            echo 'Hubo un error al enviar el correo electrónico.'; 
        }
    }
?>