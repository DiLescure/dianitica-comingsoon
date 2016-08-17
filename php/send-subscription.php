<?php

// Please put your PHP code here
//
// You can use entered e-mail variable as $_POST['subscription'] and your email address inserted in options.js as $_POST['my_email']

// Please insert here your email address:
$myMail  = $_POST['my_email'];

$to      = $myMail;
$subject = 'New subscription from '.$_POST['subscription'];
$message = $_POST['subscription'];
$headers = 'From: '.$_POST['subscription']. "\r\n" .
    'Reply-To: '.$_POST['subscription']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>