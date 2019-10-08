<?php 
session_start();
include('Admin/Database/Connection.php');
if(isset($_GET['vkey']))
{
	$vkey = $_GET['vkey'];
$result  = "select verified,vkey from customer where vkey='".$vkey."' limit 1";
$run = mysqli_query($link,$vkey);
if(mysqli_num_rows($run) > 0)
{
$update = "update verified='1' from customer where vkey='".$vkey."' limit 1";
$ok = mysqli_query($link,$update);
if($ok)
{
	echo "your account has been verified you have to login";
	header("locaiton:login.html");
}
}else
{
	echo "this account is invalid";
	header("location:login.html");
}
}
else
{
	die("someting went wrong");
}



?>