<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(empty($_GET['form-from']) || empty($_GET['form-message'])){
    header('Location: index.php');
    exit();
}

$from = $_GET['form-from'];
$message = $_GET['form-message'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sapo.pt';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ana_dev@sapo.pt';                     //SMTP username
    $mail->Password   = 'Ana1234506*';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('ana_dev@sapo.pt', 'Admin');
    $mail->addAddress('ana_dev@sapo.pt', $from);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form';
    $mail->Body    = 'From: '.$from.'<br>Message: '.$message;
    $mail->AltBody = 'From: '.$from.'; Message: '.$message;

    $mail->send();

    header('Location:index.php?r=send');

} catch (Exception $e) {
   header('Location:index.php?r=notsend');
 }