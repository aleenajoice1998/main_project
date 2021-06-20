<!--<?php
require_once("phpmailer/PHPMailerAutoload.php");
$mail=new PHPMailer();
$mail ->isSMTP();
$mail ->SMTPAuth();
$mail ->SMTPSecure = 'ssl';
$mail ->Host = 'smtp.gmail.com';
$mail ->Port = "578";
$mail -> isHTML();
$mail ->username ="aleenajoice1998@gmail.com";
$mail ->password ="mmolutty";
$mail ->SetFrom("aleenajoice1998@gmail.com");

$mail ->Subject ="koooiiiiii";
$mail ->Body ="heeeeeeeeeeeeeeeeeey";
$mail ->AddAddress("aleenapjoice@gmail.com");
$mail ->Send();
?>-->
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use phpmailer\PHPMailer_master\PHPMailer;
use phpmailer\PHPMailer_master\SMTP;
use phpmailer\PHPMailer_master\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aleenajoice1998@gmail.com';                     //SMTP username
    $mail->Password   = 'mmolutty';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('aleenajoice1998@gmail.com', 'Mailer');
    $mail->addAddress('aleenapjoice@gmail.com', 'aleena User');     //Add a recipient
               //Name is optional
    $mail->addReplyTo('aleenajoice1998@gmail.com', 'Information');
   // $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

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







