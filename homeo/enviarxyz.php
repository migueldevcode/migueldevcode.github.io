<?php
// Llamando a los campos

$nombre = $_POST['name'];
$correo = $_POST['email'];
$subject = $_POST['subject'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "cotizaciones@migueldev.com";
$asunto = "Enviado desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $subject \n";
$carta .= "Mensaje: $mensaje";


// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.php');

?>