<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';

// $email = "bilalraza203@gmail.com";
// $name = "Muhammad Bilal";
// $body = "doneu";
// $subject = "test";

// $headers = array(

// 	"Authorization: Bearer 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",
// 	'Content-Type: application/json',
	



// );

// $data = array(

// 	'personalizations' => array(
// 		array(
// 			"to" => array(
// 				array(
// 					"email" => $email,
// 					"name" => $name,

// 				)
// 			)
// 		)
// 	),
// 	"from" => array(
// 		"email" => "bilalraza203@gmail.com"
// 	),
// 	"subject" => $subject,
// 	"content" => array(
// 		array(
// 			"type" => "text/html",
// 			"value" => $body
// 		)
// 	)

// );

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $response = curl_exec($ch);
// echo $response;
// curl_close($ch);
// //print_r($response);
// echo $response;




?>


<?php

// Instantiation and passing `true` enables exceptions
 $mail = new PHPMailer(true);

 try {
     //Server settings
                         // Enable verbose debug output/     $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'smtp.zoho.com';  
     $mail->isSMTP();                   // Set the SMTP server to send through
     $mail->SMTPAuth   = true; 
      
      $mail->SMTPSecure = 'ssl';
     $mail->CharSet = "UTF-8";  
     $mail->SMTPDebug = 2;                                  // Enable SMTP authentication
     $mail->Username   = 'crypto@uscryptostok.com';                     // SMTP username
     $mail->Password   = 'king5872123';                               // SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
     $mail->Port       = 25;                                    // TCP port to connect to

 $companyemail = "bilalraza203@gmail.com";
     //Recipients
     $mail->setFrom('bilalraza203@gmail.com', 'Crypto STock');
     $mail->addAddress('bilalraza203@gmail.com', 'user email');     // Add a recipient
     $mail->addAddress('ellen@example.com');               // Name is optional
     $mail->addReplyTo('bilalraza203@gmail.com', 'Information');
     // $mail->addCC('cc@example.com');
     // $mail->addBCC('bcc@example.com');

     // Attachments
     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

     // Content
     $mail->isHTML(true);                                  // Set email format to HTML
     $mail->Subject = 'Crypto Stock Email Verification';
     $mail->Body    = 'Click Here for this Link <br>
     <a href="http://localhost/crypto/verify.php?vkey=erew">Activate Account</a>';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     $mail->send();
     echo 'Message has been sent';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
?>