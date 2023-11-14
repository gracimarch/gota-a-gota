<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "gota.a.gota.emprendeu@gmail.com";
    $subject = "Nuevo mensaje del formulario";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mensaje = "Nombre: $name\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Mensaje:\n$message";

    mail($to, $subject, $mensaje, $headers);
}
?>