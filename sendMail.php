<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function sendMail($from,$to,$message){

    
    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';
    
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->Port       = 587;
        $mail->SMTPAuth   = true;
        $mail->Username   = 'arunkumarg2171@gmail.com'; // Your Gmail email address
        $mail->Password   = 'mmeg zunk rutn wcyg';
        $mail->SMTPSecure = 'tls';
    
        // Recipients
        $mail->setFrom($from, 'Your Name');
        $mail->addAddress($to, 'Recipient Name');
    
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Subject of the email';
        $mail->Body    = $message;
    
        $mail->send();
        echo 'Email has been sent successfully';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
   
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // sendMail('your@gmail.com', 'recipient@example.com', "Name: $name\nEmail: $email\nMessage: $message");
    sendMail('arunkumarg2171@gmail.com','arunkumargopal3268@gmail.com',"Name: $name\nEmail: $email\nMessage: $message");
}

   
    


?>