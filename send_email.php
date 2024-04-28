<?php
$email = $_POST['email']; // Get the email from the form
$to = 'www.pettah.ai@gmail.com'; // The email where you want to receive messages
$subject = 'New Subscription Request';
$message = "You have a new subscription request from: $email";
$headers = 'From: www.pettah.ai@gmail.com
' . "\r\n" .
    'Reply-To: www.pettah.ai@gmail.com
' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully";
} else {
    echo "Email sending failed";
}
?>
