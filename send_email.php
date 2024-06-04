<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['pdf'])) {
    // Datos del correo
    $to = 'terrible0601.com'; // Cambia esto por el correo del destinatario
    $from = 'ivandejesus0601@gmail.com'; // Cambia esto por tu correo
    $fromName = 'Ivan'; // Cambia esto por tu nombre
    $subject = 'Contenido del Currículum'; 

    $file = $_FILES['pdf']['tmp_name'];
    $fileName = $_FILES['pdf']['name'];

    // Leer el archivo y codificarlo en base64
    $fileContent = chunk_split(base64_encode(file_get_contents($file)));

    // Crear una frontera única
    $separator = md5(time());

    // Encabezados del correo
    $headers = "From: $fromName <$from>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$separator\"\r\n\r\n";

    // Cuerpo del mensaje
    $body = "--$separator\r\n";
    $body .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "Aquí está el contenido del currículum en PDF.\r\n\r\n";

    // Adjuntar el archivo
    $body .= "--$separator\r\n";
    $body .= "Content-Type: application/octet-stream; name=\"$fileName\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n\r\n";
    $body .= $fileContent . "\r\n\r\n";
    $body .= "--$separator--";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo 'El correo ha sido enviado exitosamente.';
    } else {
        echo 'Error al enviar el correo.';
    }
}
?>
