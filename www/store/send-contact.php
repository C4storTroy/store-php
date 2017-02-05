<?php
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require_once 'PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPDebug = 2;
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = ""; //your email
$mail->Password = ""; //your password

$mail->setFrom("", "");
$mail->addAddress("");
$mail->Subject = "Contact from user";
$mail->msgHTML("<html>From: {$name}<br/>Email: {$email}<br/>Message: {$message}</html>");
$mail->AltBody="From: {$name}\nEmail: {$email}\nMessage: ${message}";

if($mail->send()){
  $_SESSION["success"] = "message was sent";
  header("Location: index.php");
} else {
  $_SESSION["danger"] = "Error: " . $mail->ErrorInfo;
  header("Location: contact.php");
}
die();
