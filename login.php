<?php 
session_start();
include('dbconnection.php');
if(isset($_POST['loginbtn']))
{
	$query = mysqli_query($con,"SELECT * FROM users where email = '$_POST[uemail]' AND pass = '$_POST[password]'") or die(mysqli_error($con));
	$row = mysqli_fetch_array($query); //or die(mysqli_error($con));
	if(!empty($row['email']) AND !empty($row['pass']))
	{
		$_SESSION['logged_in'] = true;
		$_SESSION['name'] = $row['fname'];
		header("Location:http://localhost/hotelBooking/welcome.php");
	}
	else
	{
		header("Location:http://localhost/hotelBooking/error.html");
	}

}


?>