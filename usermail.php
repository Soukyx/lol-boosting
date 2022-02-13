
<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $user_name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

 
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'shinobiboosting@gmail.com'; 
    $mail->Password = 'Sasuke1500?';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('shinobiboosting@gmail.com'); // adresa co mi poslouží jako SMTP server
    $mail->addAddress('shinobiboosting@gmail.com'); // adresa kam to bude chodit

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<h3>Name : $user_name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    header("Location: contact.php");

}
?>
