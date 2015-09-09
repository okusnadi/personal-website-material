<?php
$to      = 'tittoambadan@gmail.com';
$subject = 'Personal page message from ' .  $_POST['name'];
$message = $_POST['message'];
$headers = 'From: ' .  $_POST['email'] . "\r\n" .'X-Mailer: PHP/' . phpversion();

$send = mail($to, $subject, $message, $headers);

// this will help you to get the status mail sent or not
if($send) :
   $message = "Email sent";
else :
   $message = "Email sending failed";
endif;

// This is in the PHP file and sends a Javascript alert to the client
echo "<script type='text/javascript'>alert('$message');</script>";
header('Location: index.html');
exit;
?>
