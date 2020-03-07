<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/ProjetoPHPBasico/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '/var/www/html/ProjetoPHPBasico/vendor/phpmailer/phpmailer/src/SMTP.php';
require '/var/www/html/ProjetoPHPBasico/vendor/phpmailer/phpmailer/src/Exception.php';
$mail = new PHPMailer(); // instancia a classe PHPMailer

//Server settings
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username = 'correiodolulu@gmail.com'; 
$mail->Password = 'LeoCris19811304'; 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
$mail->IsHTML(true); 
//$mail->Mailer = 'smtp'; 
//$mail->SMTPSecure = 'ssl';
//$mail->SingleTo = true; 

// configuração do email a ser enviado.
$mail->setFrom ('correiodolulu@gmail.com','Mailer'); 
$mail->FromName = "Luciano enviado usando Ubuntu Mailer PHP"; 
$mail->addAddress('technology.br@gmail.com'); // email do destinatario.
$mail->addAddress('fabiolaomena@gmail.com'); // email do destinatario.
$mail->Subject = 'O assunto do email, pode vir atraves de uma variável ou arquivo.'; 
$mail->Body = 'A mensagem também pode vir atraves de uma variável ou arquivo..';

if(!$mail->Send()){
    echo "\nErro ao enviar Email:  " . $mail->ErrorInfo . "\n\n";//se der erro essa linha é executada
}else{
    echo "\n E-mail enviado com sucesso!\n";
    echo "::::::::-- Obrigado por usar nosso serviço --::::::::\n\n";
}

?>