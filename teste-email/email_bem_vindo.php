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
    $mail->Subject = "Bem-vindo!";
    $mail->Body    = '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem-vindo ao madusd</title>
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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <p>Seja bem-vindo ao <b>madusd</b>!</p>
 
                <p>Estamos muito felizes em tê-lo conosco e queremos garantir que sua experiência seja a melhor possível. Nosso sistema foi projetado para ser intuitivo e eficiente, e estamos aqui para ajudar você em cada etapa do caminho.</p>
               
                <p>Se precisar de ajuda ou tiver qualquer sugestão, não hesite em nos contactar. Nossa equipe está disponível para responder suas perguntas e ouvir suas sugestões. Você pode entrar em contato pelo e-mail ">
                <p>Obrigado por escolher! Desejamos uma excelente experiência.</p>
               
                <p>Atenciosamente,<br>
                <div class="myName">Maria Eduarda Castro</div></p>
            </div>
        </div>
    </body>
    </html>
    ';
    $mail->AltBody = "Seja bem-vindo ao madusd!
 
Estamos muito felizes em tê-lo conosco e queremos garantir que sua experiência seja a melhor possível. Nosso sistema foi projetado para ser intuitivo e eficiente, e estamos aqui para ajudar você em cada etapa do caminho.
 
Se precisar de ajuda ou tiver qualquer sugestão, não hesite em nos contactar. Nossa equipe está disponível para responder suas perguntas e ouvir suas sugestões. Você pode entrar em contato pelo e-mail ou pelo telefone .
 
Obrigado por escolher ! Desejamos uma excelente experiência.
 
Atenciosamente,
Maria Eduarda Castro";
 
    $mail->send();
    echo 'A mensagem foi enviada' . PHP_EOL;
} catch (Exception $error) {
    echo "A mensagem não pode ser enviada. Error: {$mail->ErrorInfo}";
}
?>