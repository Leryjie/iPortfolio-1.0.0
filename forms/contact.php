<?php
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email']; // This is the sender's email
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  // Email headers
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: " . $name . " <" . $email . ">" . "\r\n";
  
  // Email content
  $mailContent = "<h2>Contact Form Submission</h2>"
              . "<p><strong>Name:</strong> " . $name . "</p>"
              . "<p><strong>Email:</strong> " . $email . "</p>"
              . "<p><strong>Subject:</strong> " . $subject . "</p>"
              . "<p><strong>Message:</strong> " . $message . "</p>";
  
  // Send email
  if(mail($email, "Re: " . $subject, $mailContent, $headers)) {
    // Success response for the AJAX request
    echo "OK";
  } else {
    // Error response
    echo "Failed to send email. Please try again later.";
  }
?>
