<?php

use PHPMailer\PHPMailer\PHPMailer; // Phpmail package already on server
use PHPMailer\PHPMailer\Exception; // Phpmail package already on server

require 'PHPMailer/src/PHPMailer.php'; // Phpmail package already on server
require 'PHPMailer/src/SMTP.php'; // Phpmail package already on server

$mail = new PHPMailer(true);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Host = "localhost"; // sets the SMTP server or use the server hostname
$mail->Port = 25; // set the SMTP port for the GMAIL server
$mail->Username = "info@mydomain.com"; // SMTP account username
$mail->Password = "0TsvMU1b4el9"; // SMTP account password

$mail->SetFrom('info@mydomain.com', 'Firstname Lastname');
$mail->AddReplyTo("info@mydomain.com","John Doe");
$mail->Subject = "PHPMailer Test Subject via smtp, basic with authentication";
$mail->MsgHTML("<html><body>This is a sample message! <br></body></html>");
$mail->AddAddress("info@mydomain.com");
//$mail->AddAttachment(""); // attachment

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
 header("Location: http://www.example.com/");
}

?>