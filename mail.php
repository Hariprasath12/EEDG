<?php
session_start();
$a=$_POST["message"];
$form=$_POST["email"];
require("C:\wamp\www\mail\PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "eedg2015.vit";
$mail->Password = "miniproject";
$mail->setFrom('eedg2015.vit', "$form");
$mail->addAddress('hariprasath.1295@gmail.com', "$form");
$mail->Subject = 'Feedback search';
$mail->msgHTML("$a");
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Thanks for Feedback";
}
?>