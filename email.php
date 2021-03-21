<?php

if (isset($_POST['submit'])) {

  $first = $_POST['first'];
  $last = $_POST['last'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $to = "hooman125@gmail.com"
  $headers = "From: ".$visitor_email

  $email_subject = "New Form submission";
  $email_body = "You have received a new message from the user $first $last.\n".
                            "Here is the message:\n $message".
                            "Send your reply to:\n $visitor_email".

  mail($to, $email_subject, $email_body, $headers);
  header("Location")
}
?>
