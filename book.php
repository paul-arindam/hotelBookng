<?php 
session_start();
include('dbconnection.php');

$invoice_no=rand(1000,9999);

if(isset($_POST['book']))
{
  $hotelid = mysqli_real_escape_string($con, $_SESSION['hotelid']);
  $firstname = mysqli_real_escape_string($con, $_POST['fname']);
  $lastname = mysqli_real_escape_string($con, $_POST['lname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $room = mysqli_real_escape_string($con, $_POST['rooms']);
  $guest = mysqli_real_escape_string($con, $_POST['guests']);
  $roomtype = mysqli_real_escape_string($con, $_POST['roomtype']);
  $arrival = mysqli_real_escape_string($con, $_POST['arrival']);
  $departure = mysqli_real_escape_string($con, $_POST['departure']);
  $total = mysqli_real_escape_string($con, $_POST['bill']);
  $invoice=mysqli_real_escape_string($con, $invoice_no);

  $query = "INSERT INTO bookings (`hotelid`, `fname`, `lname`, `email`, `phone`, `numroom`, `numguest`, `type`, `arrdate`, `depdate`, `bill`, `invoice`) 
  			  VALUES('$hotelid','$firstname', '$lastname', '$email' , '$phone' , '$room', '$guest', '$roomtype', '$arrival', '$departure', '$total', '$invoice')";
  	mysqli_query($con, $query);

  	if ($query) {
        /*$q="SELECT bookid FROM bookings WHERE fname='$firstname'";
        $res=mysqli_query($con, $q);
        $row = mysqli_fetch_array($res);
        $_SESSION['bookingid']= $row['bookid'];*/
        header("Location:http://localhost/hotelBooking/invoice2.php?invoice={$invoice_no}");

    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }

}

?>