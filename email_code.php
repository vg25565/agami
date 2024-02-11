<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP  ;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587; 
        $mail->SMTPAuth = true;
        $mail->Username = 'xyz14710@gmail.com'; // Your Gmail email address
        $mail->Password = 'chtu autw bxel dyiv'; // Your Gmail password
        $mail->SMTPSecure = 'tls';

        // Recipients
        $mail->setFrom('xyz14710@gmail.com'); // Your Gmail email address
        $mail->addAddress($email);

        // Content
        $mail->isHTML(false);
        $mail->Subject = "Registration Confirmation";
        $mail->Body = " Hey $name,\n Welcome to Agami!\n\nWe are delighted to have you as part of our community and look forward to receiving your valuable contributions.\n\n Your login credentials are as follows:\nEmail: $email\nPassword: $password\n\nThank you for registering!\n\n";

        $mail->send();
        
    } catch (Exception $e) {
        echo "Registration successful, but there was an issue sending the confirmation email: {$mail->ErrorInfo}";
    }
}
?>