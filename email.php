<?php 

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings                   //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rafaelbaruc2015@gmail.com';                     //SMTP username
    $mail->Password   = 'kgtk zarh nprp ctey';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('rafaelbaruc2015@gmail.com', 'BarucTV');
    // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // // $mail->addReplyTo('info@example.com', 'Information');
    // // $mail->addCC('cc@example.com');
    // // $mail->addBCC('bcc@example.com');

    // // //Attachments
    // // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    // //Content
    // $mail->isHTML(true);                                  //Set email format to HTML
    // $mail->Subject = 'Here is the subject';
    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail cli

?>