
<?php 
include('Admin/Database/Connection.php');

if(isset($_POST['customerid']))
{
	$customerid = $_POST['customerid'];
	$bitcoin = $_POST['bitcoin'];
	$withdraw = $_POST['witdraw'];
	$status = $_POST['status'];
	$todaydate = $_POST['todaydate'];
	$today = $_POST['today'];
	$amount = $_POST['amount'];
	if($today == "Sunday")
	{
		echo "withdraw off on saturday and sunday";
	}
	else if($today == "Saturday")
	{
		echo "withdraw off on saturday and sunday";
	}
	else
	{
		$insert = "insert into customer_withdraw(customerid,bitcoinaddress,amount,status,todaydate,send) values('".$customerid."','".$bitcoin."','".$amount."','".$status."','".$todaydate."','".$withdraw."')";
            $run = mysqli_query($link,$insert);
            echo "you withdraw request successfully";
	}
}


?>