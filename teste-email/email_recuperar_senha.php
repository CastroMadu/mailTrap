<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require 'vendor/autoload.php';
 
$mail = new PHPMailer(true);
 
// Gera um código temporário aleatório
$codigoTemporario = rand(100000, 999999);
 
try {
    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth   = true;
    $mail->Username   = '68094a88bdd045';
    $mail->Password   = 'e7e8e5cd204311';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525;
 
    $mail->setFrom('maducastroo200&@gmail.com', 'Equipe [Nome do Sistema]');
    $mail->addAddress('ellen@outlook.com'); // Substitua pelo endereço de e-mail do destinatário
    $mail->isHTML(true);
    $mail->CharSet = "UTF-8";
    $mail->Subject = "Recuperação de Senha";
    $mail->Body    = '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recuperação de Senha</title>
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
            .code {
                display: inline-block;
                padding: 10px 20px;
                font-size: 18px;
                color: #ffffff;
                background-color: #007bff;
                border-radius: 5px;
            }
            .myName{
                color: blue;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <p>Olá</p>
 
                <p>Recebemos uma solicitação para redefinir a senha da sua conta. Se você não fez essa solicitação, por favor, ignore este e-mail.</p>
               
                <p>Seu código temporário para redefinir a senha é:</p>
               
                <p class="code">' . $codigoTemporario . '</p>
               
                <p>Por favor, use este código no campo apropriado para redefinir sua senha. O código expira em 30 minutos.</p>
               
                <p>Obrigado !</p>
               
                <p>Atenciosamente,<br>
                <div class="myName">Maria Eduarda Castro</div></p>
            </div>
        </div>
    </body>
    </html>
    ';
    $mail->AltBody = "Olá ,
 
Recebemos uma solicitação para redefinir a senha da sua conta . Se você não fez essa solicitação, por favor, ignore este e-mail.
 
Seu código temporário para redefinir a senha é: $codigoTemporario
 
Por favor, use este código no campo apropriado para redefinir sua senha. O código expira em 30 minutos.
 
Obrigado!
 
Atenciosamente
 
Maria Eduarda Castro";
 
    $mail->send();
    echo 'A mensagem foi enviada' . PHP_EOL;
} catch (Exception $error) {
    echo "A mensagem não pode ser enviada. Error: {$mail->ErrorInfo}";
}
?>