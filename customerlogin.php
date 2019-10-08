<?php
include('Admin/Database/Connection.php');
session_start();

if(isset($_POST['customerlogin']))

{
	$username   = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$rafferal = $_POST['rafferal'];
	$password = $_POST['password'];
	$bitcoin = $_POST['bitcoin'];
	 $image_temp =  $_FILES['img']['tmp_name'];
$image_type = $_FILES['img']['type'];
$image_name = $_FILES['img']['name'];
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
			$to = $email;
			$subject = "Email Verfication";
			$message = "<a href='http://localhost/registration/verifiy.php?vkey=$vkey'>Register Account</a>";
			$headers = "From:CryptoCurrency@yahoo.com";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";
			mail($to,$subject,$message,$headers);
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

		//header("Location:home.php");
	}
}

?>