<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$formcontent="
    Nombre: $nombre \n
    Apellido: $apellido \n
    E-mail: $email \n
    Asunto: $mensaje
";

$recipient = "info@gvglobalgroup.com";

$subject = "Correo desde la web";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>