<?php
namespace illusion;

class Mail{
  public static function send($to,$subject,$content,$sender=MAIL_SENDER_DEFAULT){

    //Create a new PHPMailer instance
    $mail = new \PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;

    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    $mail->Host = MAIL_HOST;

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = MAIL_PORT;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = MAIL_USER;

    //Password to use for SMTP authentication
    $mail->Password = MAIL_PASS;

    //Set who the message is to be sent from
    $mail->setFrom(MAIL_USER, $sender);

    //Set an alternative reply-to address

    //Set who the message is to be sent to
    $mail->addAddress($to);

    //Set the subject line
    $mail->Subject = $subject;

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($content);

    //Replace the plain text body with one created manually


    //Attach an image file
       //$mail->addAttachment('images/phpmailer_mini.png');
    $state=true;
    if (!$mail->send()) {
    $state=false;
    }
    return $state;
  }

}
?>
