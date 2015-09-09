<?php
$to      = 'tittoambadan@gmail.com';
$subject = 'Personal page message from ' .  $_POST['name'];
$message = $_POST['message'];
$headers = 'From: ' .  $_POST['email'] . "\r\n" .'X-Mailer: PHP/' . phpversion();

$send = mail($to, $subject, $message, $headers);

// this will help you to get the status mail sent or not
if($send) :
   echo "Email sent";
else :
    echo "Email sending failed";
endif;

?>
