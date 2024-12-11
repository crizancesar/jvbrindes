<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/vendor/PHPMailer/src/Exception.php';
require '../assets/vendor/PHPMailer/src/PHPMailer.php';
require '../assets/vendor/PHPMailer/src/SMTP.php';

  
  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'mail.jvbrindes.com.br';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'contato@jvbrindes.com.br';                     //SMTP username
      $mail->Password   = 'Senha@123';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('contato@jvbrindes.com.br', 'João Victor');
      $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Here is the subject';
      $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
/*   
  $mail->to = $receiving_email_address;
  $mail->from_name = $_POST['name'];
  $mail->from_email = $_POST['email'];
  $mail->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $mail->smtp = array(
    'host' => 'mail.jvbrindes.com.br',
    'username' => 'contato@jvbrindes.com.br',
    'password' => 'Senha@123',
    'port' => '465'
  );
 

  $mail->add_message( $_POST['name'], 'From');
  $mail->add_message( $_POST['email'], 'Email');
  $mail->add_message( $_POST['message'], 'Message', 10);

  echo $mail->send();
?> */
