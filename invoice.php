<?php
session_start();
include('dbconnection.php');
if(isset($_POST['book'])){
$invoice= $_GET['invoice'];
$sql = "SELECT * FROM bookings where invoice='$invoice'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
while($row = mysqli_fetch_array($result)){
    echo $row['fname'];
    echo $row['lname'];

$hotelid=$row['hotelid'];
echo $hotelid;

$sql2 = "SELECT * FROM hotels where hotelid= '$hotelid'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
$hotelrow = mysqli_fetch_array($result);


echo '
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
                                Invoice no.: '.$row['invoice'].' <br>
                                Booked on: <?php echo date("Y/m/d");?><br>
                                <?php echo date("h:i:sa");?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>From<br>'.
                             $hotelrow['name'].'<br>'
                             .$hotelrow['location'].', '.$hotelrow['address'].'<br>
                                Contact: '.$hotelrow['contact'].'<br>
                            </td>
                            
                            <td>To<br>
                                '.$row['fname'].' '.$row['lname'].'<br><br>
                                E-mail: '.$row['email'].'<br><br>
                                Mobile no.: '.$row['phone'].'<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="dates">
                <td>
                    Check-in Date:<br>
                    '.$row['arrdate'].'
                </td>
                
                <td>
                    Departure Date:<br>
                    '.$row['depdate'].'
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
                
                <td>
                    Check-in
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
                '.$row['numroom'].'
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Type
                </td>
                
                <td>
                  '.$row['type'].'
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Guest(s)
                </td>
                
                <td>
                  '.$row['numguest'].'
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: '.$row['bill'].'
                </td>
            </tr>
        </table>
    </div>
</body>
</html>';
}
}
?>