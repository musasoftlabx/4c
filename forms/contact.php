<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From : $name" . "\r\n" .
              "Email: $email" . "\r\n" .
              "Subject: $subject" . "\r\n" . "Message: $message";

  if (mail("info@4c.co.ke", "Registration Form", 'You have been registered', $headers)) {
    echo "Message sent!";
  } else {
    echo "Message was not sent!";
  }
?>
