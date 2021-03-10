<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "phpMailer/src/exception.php";
require "phpMailer/src/phpMailer.php";
require "phpMailer/src/SMTP.php";

$mail = new PHPMailer(true); //Argument true in constructor enables exceptions`
$mail->CharSet = 'utf-8';
$mail->setLanguage('ru', 'phpmailer/language');
$mail->isHTML(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "philw7321980@gmail.com";
$mail->Password = "Hjvbx450299";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;

$mail->setFrom('philw7321980@gmail.com');
$mail->addAddress('philw7321980@gmail.com'); //Recipient name is optional

$mail->Subject = "В вашем товаре заинтересованы!";

$body = '<h2> Свяжитесь с покупателем по следующим контактам: </h2>';

if (trim(!empty($_POST['fio']))) {
  $body.='<p><strong>Имя:</strong> '.$_POST['fio'].'</p>';
}
if (trim(!empty($_POST['email']))) {
    $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
}
  if (trim(!empty($_POST['phone']))) {
    $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
}

$mail->Body = $body;
try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    print_r(error_get_last());
}
?>