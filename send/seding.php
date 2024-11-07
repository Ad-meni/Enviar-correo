<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['to_elle'];
    $subject = $_POST['effair'];
    $message = $_POST['message'];
    $headers = "br630455@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
