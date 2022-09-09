<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function sendmail($fullname, $email, $file_path_pdf)
{

    //Load Composer's autoloader
    require 'vendor/autoload.php';
    require 'config.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    // try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = $secret_Email; //SMTP username
    $mail->Password = $secret_password; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure =

    //Recipients
    $mail->setFrom('botbk.er12@gmail.com', 'Blood Bank');
    $mail->addAddress($email, $fullname); //Add a recipient
    $mail->addReplyTo('botbk.er12@gmail.com', 'Information');

    //Attachments
    $mail->addAttachment($file_path_pdf); //Add attachments

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Blood Donation appreciation';
    $mail->Body = "Hi $fullname, Our thanks go out to you for making this choice and for taking the time to make a blood donation.It is impossible to overestimate the value of your blood donation. In many cases, saving a life is dependent on finding the right blood for a transfusion. My team and I are grateful for the kindness you have demonstrated by this contribution. Please know that you have made a huge difference.";
    $mail->AltBody = 'Our thanks go out to you for making this choice and for taking the time to make a blood donation.It is impossible to overestimate the value of your blood donation.';

    $result = $mail->send();
    return $result;

}