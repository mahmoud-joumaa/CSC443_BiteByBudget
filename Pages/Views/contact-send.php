<?php 

$msg = "ASDBKJASBDKJB";

$to = 'ahamadhassanhussein2003@gamil.com';
$subject = 'Test email';
$message = 'This is a test email sent from PHP.';
$headers = 'From: ahamadhassanhussein2003@gamil.com';

$mail_sent = mail($to, $subject, $message, $headers);

if ($mail_sent) {
    echo 'Email sent successfully.';
} else {
    echo 'An error occurred while sending the email.';
}

?>