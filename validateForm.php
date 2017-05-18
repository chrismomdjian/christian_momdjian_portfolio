<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $success_message = "<div class='alert alert-success alert-dismissable'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <p style='font-weight: bold;'>Thanks for reaching out to me! I'll get back to you as soon as possible.</p>
                      </div>";
  $fail_message = "<div class='alert alert-danger alert-dismissable'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <p style='font-weight: bold;'>Sorry, something went wrong while sending your message.</p>
                   </div>";

  $email = test_input($_POST["email"]);
  $user_name = test_input($_POST["fullName"]);
  $message_body = test_input($_POST["comment"]);

  require("inc/class.phpmailer.php");       // require the PHPMailer third-party library
  require("inc/class.smtp.php");

  $mail = new PHPmailer;

  $mail->setFrom($email, $user_name);
  $mail->addAddress('chrismomdjian@gmail.com', 'Christian Momdjian');

  $mail->isHTML(false);

  $mail->Subject = 'Contact Form Submission from ' . $user_name;
  $mail->Body    = $message_body;

  if(!$mail->send()) {
      echo $fail_message;
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo $success_message;
  }

}

// Cleans up user input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
