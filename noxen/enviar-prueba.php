<?php
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$body = "nombre: " . $nombre . "<br>telefono: " . $telefono . "<br>correo: " . $correo . "<br>mensaje: " . $mensaje;




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'aceitesproduclar@gmail.com';                     // SMTP username
    $mail->Password   = '1005719447';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ariascristian085@gmail.com', $nombre);
    $mail->addAddress('aceitesproduclar@gmail.com');     // Add a recipient
    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Importante';
    $mail->Body    = $body;
    $mail->CharSet= 'UTF-8';

    

    $mail->send();
    echo '<script>
    alert("El mensaje se envió correctamente.");
    window.history.go(-1);
    </script>'; 
} catch (Exception $e) {
    echo '<script>
    alert("Lo sentimos, el mensaje no se envió correctamente.");
    window.history.go(-1);
    </script>'; 
}