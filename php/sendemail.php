<?php



require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP(); 
$mail->From = "contact@jasoneric.com";
$mail->FromName = "contact";

$mail->Host     = "pop.secureserver.net"; // your SMTP Server
$mail->Mailer   = "smtp"; // SMTP Method
$mail->SMTPAuth = true;  // Auth Type
$mail->Username = "contact@jasoneric.com";
$mail->Password = "shaolin";

$mail->AddAddress("contact@jasoneric.com");
$mail->Subject = "Message from jasoneric.com";
$mail->Body = $_GET['body'];

//$mail->Subject    = "PHPMailer Test Subject via smtp";

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
