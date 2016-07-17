<?php
/**
 * Created by PhpStorm.
 * User: Gihan
 * Date: 2016-06-01
 * Time: PM 6.06
 */
require_once('PHPMailer-master/PHPMailerAutoload.php');

$MailUsername='example@gmail.com';
$MailPassword='password';
$SetFrom='example@gmail.com';

$to='to@gmail.com';

$subject='php mail';
$body='Hello PHP MAILER';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = $MailUsername;
$mail->Password = $MailPassword;
$mail->SetFrom($SetFrom);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($to);

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}