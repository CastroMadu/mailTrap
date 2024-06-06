<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require 'vendor/autoload.php';
 
$mail = new PHPMailer(true);
 
try {
    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth   = true;
    $mail->Username   = '68094a88bdd045';
    $mail->Password   = 'e7e8e5cd204311';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525;
 
    $mail->setFrom('maducastroo2007@gmail.com');
    $mail->addAddress('ellen@outlook.com');
    $mail->isHTML(true);
    $mail->CharSet = "UTF-8";
    $mail->Subject = "Sua senha foi alterada!";
    $mail->Body    = '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Senha alterada</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background-color: #f9f9f9;
            }
            .container {
                max-width: 600px;
                margin: auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .content {
                color: #333333;
                line-height: 1.6;
            }
            .content p {
                margin-bottom: 15px;
            }
            .content b {
                color: green;
            }
            .myName{
                color: blue;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <p>Sua Senha foi alterada com sucesso! </p>
 
                <p>Olá, a equipe <b>madusd</b> informa que sua senha foi alterada com sucesso.</p>
                <p> Caso você mesmo tenha feito a alteração, ignore este Email.</p>
                <p> Se você não alterou sua senha, entre em contato com o nosso suporte. </p> 

                <p>Atenciosamente,<br>
                <div class="myName">Maria Eduarda Castro</div></p>
            </div>
        </div>
    </body>
    </html>
    ';
    $mail->AltBody = "Sua senha foi alterada no madusd!
 
    Olá, a equipe madusd informa que sua senha foi alterada com sucesso.
    Caso você mesmo tenha feito a alteração, ignore este Email.
    Se você não alterou sua senha, entre em contato com o nosso suporte.

 
Atenciosamente,
Maria Eduarda Castro";
 
    $mail->send();
    echo 'A mensagem foi enviada' . PHP_EOL;
} catch (Exception $error) {
    echo "A mensagem não pode ser enviada. Error: {$mail->ErrorInfo}";
}
?>