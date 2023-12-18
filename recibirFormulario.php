<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/PHPMailer-master/src/Exception.php';
require './PHPMailer/PHPMailer-master/src/PHPMailer.php';
require './PHPMailer/PHPMailer-master/src/SMTP.php';

// Recoge los datos del formulario
$nombre = "nombre";
$email = "correo@gmail.com";
$mensaje = "mensaje";

// Crea una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configura el servidor SMTP de Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'correo@gmail.com';  // Tu dirección de Gmail
    $mail->Password = 'pass';  // Tu contraseña de Gmail
    $mail->Port = 587;

    // Configura opciones adicionales
    $mail->SMTPDebug = 2; // Habilita la depuración para obtener más información
    $mail->set('oauth2_client_id', 'tu_id_de_cliente');
    $mail->set('oauth2_client_secret', 'tu_secreto_de_cliente');
    $mail->set('oauth2_token', 'tu_token');

    // Configura el remitente y el destinatario
    $mail->setFrom('correo@gmail.com', 'Tu Nombre');
    $mail->addAddress('correo@gmail.com', 'Destinatario');

    // Configura el asunto y el cuerpo del mensaje
    $mail->Subject = 'Nuevo mensaje de contacto';
    $mail->Body = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje: $mensaje";

    // Envía el correo
    $mail->send();

    echo 'El mensaje se envió correctamente';
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>
