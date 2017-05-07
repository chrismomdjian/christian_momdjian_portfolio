<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $success_message = "Your message was sent successfully!";
  $fail_message = "Sorry. Something went wrong while sending your message.";

  $email = test_input($_POST["email"]);
  $user_name = test_input($_POST["fullName"]);
  $message_body = test_input($_POST["comment"]);

  $to = "chrismomdjian@gmail.com";
  $subject = "Contact Form Submission from " . $user_name;

  if( mail($to, $subject, $message_body) ) {
    echo $success_message;
  } else {
    echo $fail_message;
  }

}

// Cleans up user input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
