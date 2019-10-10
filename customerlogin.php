<?php
include('Admin/Database/Connection.php');
session_start();
		
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';

if(isset($_POST['customerlogin']))

{
	$username   = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$rafferal = $_POST['rafferal'];
	$password = $_POST['password'];
 	$bitcoin = $_POST['bitcoin'];
 	$image = $_POST['img'];
// 	 $image_temp =  $_FILES['img']['tmp_name'];
// $image_type = $_FILES['img']['type'];
// $image_name = $_FILES['img']['name'];
@$rafferalref = $_POST['rafferalref'];

$vkey = md5(time() . $username);


           
	 $sql = "select * from customer where username='".$username."'";
	$run = mysqli_query($link,$sql);
	if(mysqli_num_rows($run) > 0)
	{
	echo "Already Entered";	
	header("Location:login.html");
	}
	else
	{

           $upload = move_uploaded_file($_FILES["img"]["tmp_name"],'customerimage/' . $_FILES['img']['name']);
 $imagename = 'customerimage/'.$_FILES['img']['name'];

		$todaydate = date("Y/m/d");
		$insert = "insert into customer(username,firstname,lastname,email,rafferal,password,bitcoinaddress,image,vkey,verified) values('".$username."','".$firstname."','".$lastname."','".$email."','".$rafferal."','".$password."','".$bitcoin."','".$imagename."','".$vkey."','0')";


		$runinsert = mysqli_query($link,$insert);
		if($runinsert)
		{








// Load Composer's autoloader


// Instantiation and passing `true` enables exceptions
 $mail = new PHPMailer(true);

 try {
     //Server settings
     $mail->SMTPDebug = 2;                      // Enable verbose debug output/     $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
     $mail->SMTPAuth   = true; 
      $mail->SMTPSecure = "tls";
     $mail->CharSet = "UTF-8";                                  // Enable SMTP authentication
     $mail->Username   = 'apikey';                     // SMTP username
     $mail->Password   = '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';                               // SMTP password
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
     <a href="http://localhost/crypto/verify.php?vkey='.$vkey.'">Activate Account</a>';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     $mail->send();
     echo 'Message has been sent';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
		}
		if($rafferal !== "" && $rafferalref !="")
		{

		$rafferal = "insert into rafferal(todaydate,rafferalunderusername,newregisterusername) values('".$todaydate."','".$rafferal."','".$username."')";
		$runrafferal = mysqli_query($link,$rafferal);
		
		$sql = "select * from customer where email='".$email."'";
		$run = mysqli_query($link,$sql);
		while($row = mysqli_fetch_assoc($run))
		{
			$id = $row['id'];
			$_SESSION['email'] = $email;
			$_SESSION['id']   = $id;
		}
	}
	// echo "<script>
	//  window.location.href = 'Thankyou.php?username=$username&email=$email';
	// </script>";

		//header("Location:home.php");
	}
}

?>