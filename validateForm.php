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
  $comment = test_input($_POST["comment"]);

  // Subject line of email
  $subject = "Contact Form Submission From " . $user_name;

  // Construct body of email
  $message_body = "The following information was submitted via your website's contact form: \n";
  $message_body .= "Sender Name: " . $user_name . "\n";
  $message_body .= "Email Address: " . $email . "\n";
  $message_body .= "--- Beginning of Message ---\n";
  $message_body .= $comment . "\n";
  $message_body .= "--- End of Message ---";

  require "inc/mailer/PHPMailerAutoload.php";               // include the PHPMailer class
  $mail = new PHPMailer();                              // create an instance of PHPMailer
  $mail->Host = "smtp.gmail.com";                       // choose a host
  $mail->SMTPAuth = true;                               // set authentication to true
  $mail->Username = "chrismomdjian@gmail.com";          // set login details for gmail account (to SEND email)
  include "inc/pass.php";
  $mail->SMTPSecure = "ssl"; // or tls                  // set type of protection
  $mail->Port = "465"; // 587 if tls                    // set a port
  $mail->Subject = $subject;                            // set subject
  $mail->Body = $message_body;                          // set body
  $mail->setFrom("chrismomdjian@gmail.com");            // set who is sending the email
  $mail->addAddress("chrismomdjian@gmail.com");         // set where we are sending the email to (recipients)

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
