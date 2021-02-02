<?php
session_start();
include('dbconnection.php');
$invoice_num=$_GET["invoice"];
$sql = "SELECT * FROM bookings where invoice='$invoice_num'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result)===0){?><br><br><br>
<center><p style="color:red; font-size:20px;">This Booking does not Exists.</p>
<a href="/hotelBooking/welcome.php"><button style="background:#e8491d; padding:10px; border-radius:5px;color:white;">Retry</button></a>
</center>
<?php
}
else{
    $hotelid=$row['hotelid'];

    $sql2 = "SELECT * FROM hotels where hotelid='$hotelid'";
    $result2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
    $hotelrow = mysqli_fetch_array($result2);

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thankyou for Booking</title>
    <link rel="stylesheet" href="./css/invoice.css">
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h4 style="margin:0px;">Invoice</h4>
                            </td>
                            
                            <td>
                                Invoice no.: <?php echo $invoice_num;?> <br>
                                Booked on: <?php echo date("Y/m/d");?><br>Time: 
                                <?php 
                                date_default_timezone_set('Asia/Kolkata');
                                echo date("h:i:sa",time());?>
                            </td>
                        </tr>
                    </table><hr>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>From:<br>
                            <?php echo $hotelrow['name'];?><br>
                             <?php echo $hotelrow['location'].', ' .$hotelrow['address'];?> <br>
                                Contact: <?php echo $hotelrow['contact']?><br>
                            </td>
                            
                            <td>To:<br>
                                <?php echo $row['fname'].' '.$row['lname']?><br>
                                E-mail: <?php echo $row['email']?><br>
                                Mobile no.: <?php echo $row['phone']?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Check-in Date:<br>
                </td>
                
                <td>
                    Departure Date:<br>
                </td>
            </tr>

            <tr class="dates">
                <td>
                    <?php echo $row['arrdate']?>
                </td>
                
                <td>
                    <?php echo $row['depdate']?>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Cash
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                Accommodation/Services
                </td>
                
                <td>
                    Qty
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Room(s)
                </td>
                
                <td>
                <?php echo $row['numroom']?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Type
                </td>
                
                <td>
                <?php
                if($row['type']==1596) 
                echo 'Premium';
                else if($row['type']==2846)
                echo 'Deluxe';
                else
                echo 'Standard';?>
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Guest(s)
                </td>
                
                <td>
                <?php echo $row['numguest']?>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: Rs. <?php echo $row['bill']?>
                </td>
            </tr>
        </table>
    </div><br>
    <center><a href="/hotelBooking/welcome.php"><button style="background:#e8491d; padding:10px; border-radius:5px;color:white;">Continue</button></a></center>
    <br><br>
</body>
</html>
<?php } ?>