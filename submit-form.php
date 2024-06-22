<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Send email notification
$to = 'naseedguy@gmail.com';
$subject = 'New message from your website';
$message_body = "Name: $name\n";
$message_body .= "Email: $email\n\n";
$message_body .= "Message:\n$message";

// Send email
$headers = "From: $email\r\nReply-To: $email\r\n";
mail($to, $subject, $message_body, $headers);

// Redirect or provide a response to the user
header('Location: portfolio.html'); // Exit by going back to the index page();
?>