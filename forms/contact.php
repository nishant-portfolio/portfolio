<?php

  // Replace this with your email
  // $to = 'nishuu2042001@gmail.com';
  $to = 'ayushgoregaonkar28@gmail.com';
  
  // Retrieve form data
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $subject = isset($_POST['subject']) ? $_POST['subject'] : 'No Subject';
  $message = isset($_POST['message']) ? $_POST['message'] : 'No Message';
  
  // Create the email headers
  $headers = "From: $name <$email>" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  // Create the email message
  $full_message = "You have received a new message from your website contact form:\n\n";
  $full_message .= "Name: $name\n";
  $full_message .= "Email: $email\n";
  $full_message .= "Message:\n$message\n";

  // Send the email
  if(mail($to, $subject, $full_message, $headers)) {
    echo 'Email sent successfully!';
  } else {
    echo 'Email sending failed!';
  }
?>
