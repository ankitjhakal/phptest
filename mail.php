<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 if(isset($_POST['email']))
 { require 'PHPMailer.php';
   require 'SMTP.php';
   require 'Exception.php';
   require 'vendor/autoload.php';
   $mail=new PHPMailer;
   $mail->isSMTP();
   $mail->Host='smtp.gmail.com';
   $mail->Port=587;
   $mail->SMTPSecure='TLS';
   $mail->SMTPAuth=true;
   $mail->Username="aj9828791470@gmail.com";
   $mail->Password="9828791470";
   $mail->setFrom('aj9828791470@gmail.com');
   $mail->addAddress($_POST['email']);
   $mail->Subject='gmail smtp through PHPMailer';
   $mail->Body='thank u for ur submission';
 }

 if(!$mail->send())
 {
   echo "mailer error:  ".$mail->ErrorInfo;
 }
 else {
   echo "msg sent";
 }
?>
