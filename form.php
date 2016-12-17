<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'michaeljj17@hotmail.com';
$subject = 'Websote Contact Form';
$msg = $name . " " . $email . " " . $message;

mail($to, $subject, $msg);
?>