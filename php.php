<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set up the email message
  $to = "yourgmailaddress@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Send the email
  mail($to, $subject, $body);

  // Redirect the user to a thank you page
  header("Location: thanks.html");
  exit;
}
?>
