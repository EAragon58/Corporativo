<?php
if(isset($_POST['email'])) {
    // Destinatario del correo electrónico
    $to = "holason279@gmail.com";
    
    // Asunto del correo electrónico
    
    
    // Contenido del correo electrónico
    $message = "Nombre: " . $_POST['name'] . "\n\n";
    $message .= "Correo electrónico: " . $_POST['email'] . "\n\n";
    $message .= "Mensaje: \n" . $_POST['textarea'];
    
    // Cabeceras del correo electrónico
    $headers = "From: " . $_POST['email'] . "\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    
    // Enviar el correo electrónico
    mail($to, "Contacto CFS", $message, $headers);
    
    // Redirigir al usuario a una página de confirmación
    header('Location: contacto.html');
}
?>