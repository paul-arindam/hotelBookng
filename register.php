<?php 
session_start();
include('dbconnection.php');

if(isset($_POST['reg_user']))
{
  $firstname = mysqli_real_escape_string($con, $_POST['fname']);
  $lastname = mysqli_real_escape_string($con, $_POST['lname']);
  $email = mysqli_real_escape_string($con, $_POST['uemail']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);

  $query = "INSERT INTO users (fname, lname, email, pass, phone) 
  			  VALUES('$firstname', '$lastname', '$email', '$password', '$phone')";
  	mysqli_query($con, $query);
  	$_SESSION['fname'] = $fname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: about.html');

}

?>