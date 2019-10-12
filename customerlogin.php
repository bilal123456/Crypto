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
	//header("Location:Login.html");
	}
	else
	{

 //           $upload = move_uploaded_file($_FILES["img"]["tmp_name"],'customerimage/' . $_FILES['img']['name']);
 // $imagename = 'customerimage/'.$_FILES['img']['name'];

		$todaydate = date("Y/m/d");
		$insert = "insert into customer(username,firstname,lastname,email,rafferal,password,bitcoinaddress,image,vkey,verified) values('".$username."','".$firstname."','".$lastname."','".$email."','".$rafferal."','".$password."','".$bitcoin."','s','".$vkey."','0')";


		$runinsert = mysqli_query($link,$insert);
		if($runinsert)
		{








// Load Composer's autoloader


// Instantiation and passing `true` enables exceptions
 $mail = new PHPMailer(true);

    
     $subject = 'Crypto Stock Email Verification';
     $body    = 'Click Here for this Link <br>
     <a href="http://www.uscryptostok.com/verify.php?vkey='.$vkey.'">Activate Account</a>';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     $phpMailer = new PHPMailer(true);
$phpMailer->isSMTP();
$phpMailer->Host = "smtp.zoho.com";
$phpMailer->SMTPAuth = true;
<<<<<<< HEAD
$phpMailer->Username = "bilalraza203@gmail.com";
$phpMailer->Password = "king5872123123";
=======
$phpMailer->Username = "crypto@uscryptostok.com";
$phpMailer->Password = "king5872123";
>>>>>>> a4d39660312e2b3d2e9249686f401aaf9fb67a6c
$phpMailer->SMTPSecure = "sls";
$phpMailer->Port = 587;
$phpMailer->isHTML(true);
$phpMailer->CharSet = "UTF-8";
<<<<<<< HEAD
$phpMailer->setFrom("info@uscryptostok.com", "Us Crypto Stock");
//$phpMailer->From  = $email;
// $phpMailer->AddCC($email, 'Person One');
$phpMailer->addAddress($email,'Us Crypto Official');

=======
$phpMailer->setFrom("crypto@uscryptostok.com", "Us Crypto Stock");
//$phpMailer->From  = $email;
// $phpMailer->AddCC($email, 'Person One');
$phpMailer->addAddress($email,'done');
>>>>>>> a4d39660312e2b3d2e9249686f401aaf9fb67a6c
$phpMailer->Subject = $subject;
$phpMailer->Body = $body;
$phpMailer->send();
		
		if($rafferal !== "" && $rafferalref !="")
		{

		$rafferal = "insert into rafferal(todaydate,rafferalunderusername,newregisterusername,commission,totalcommission) values('".$todaydate."','".$rafferal."','".$username."','0','0')";
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
	 echo "<script>
	  window.location.href = 'Thankyou.php?username=$username&email=$email';
	 </script>";

		header("Location:home.php");
	}
}
}

?>