<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = "your-email@example.com"; // Replace with your actual email
  $subject = "Portfolio Contact Message from: $name";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if(mail($to, $subject, $body)){
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Error: Message could not be sent.";
  }
}
?>
