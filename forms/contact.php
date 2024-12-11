<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/vendor/PHPMailer/src/Exception.php';
require '../assets/vendor/PHPMailer/src/PHPMailer.php';
require '../assets/vendor/PHPMailer/src/SMTP.php';

  $mail = new PHPMailer;
  $mail->ajax = true;
  
  $mail->to = $receiving_email_address;
  $mail->from_name = $_POST['name'];
  $mail->from_email = $_POST['email'];
  $mail->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $mail->smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'cdicrizancesar@gmail.com',
    'password' => 'ciscov-vevfy0-xikcyH',
    'port' => '587'
  );
 

  $mail->add_message( $_POST['name'], 'From');
  $mail->add_message( $_POST['email'], 'Email');
  $mail->add_message( $_POST['message'], 'Message', 10);

  echo $mail->send();
?>
