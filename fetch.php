<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'shoopingcart');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($con));
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

$sql = "SELECT * FROM hotels where 1";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));

echo "<table border=1px>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Address</th>
        </tr>";
while ($row    = mysqli_fetch_array($result))
{

   echo "<tr>
            <td>".$row['name']."</td><td> ".$row['location']."</td><td> ".$row['address']."</td>
        </tr>";
}
echo "</table>";

?>