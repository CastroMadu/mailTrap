<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try{
    $mail->isSMTP();
    $mail->Host       ='sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth   = true;
    $mail->Username   = '68094a88bdd045';
    $mail->Password   = 'e7e8e5cd204311';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525;

    $mail->setFrom('gabriel@gmail.com');
    $mail->addAddress('ellen@outlook.com');
    $mail->isHTML(true);
    $mail->Subject = 'Notas do segundo trimestre.';
    $mail->Body    = 'Parabéns! Você foi <b style="color:green">aprovado</b>. '; // texto na programação
    $mail->AltBody =  'Parebéns! Você foi aprovado'; // texto que vai ser vizualizado na página.
    $mail->send();
    echo 'A mensagem foi enviada!' . PHP_EOL;
} catch (Exception $error){ 
    $error->getTraceAsString(); 
    echo "A mensagem não pode ser enviada. Error: {$mail->ErrorInfo}"; // caso der erro anteriormente, automaticamente a maquina vai usar essa linha e retornar o usuario.
}

?>