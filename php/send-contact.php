<?php

// Please put your PHP code here
//
// You can use entered name variable as $_POST['contact_name'], e-mail variable as $_POST['contact_email'], message variable as $_POST['contact_message'] and your email address inserted in options.js as $_POST['contact_my_email']

// Please insert here your email address:
$myMail  = $_POST['contact_my_email'];

$to      = $myMail;
$subject = 'Message from '.$_POST['contact_name'];
$message = $_POST['contact_message'];
$headers = 'From: '.$_POST['contact_email']. "\r\n" .
    'Reply-To: '.$_POST['contact_email']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>