<?php 
session_start();
include('dbconnection.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Book Hotels | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/loginForm.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/dropdown.css">

          <style>
              select {
            font-size: 16px; 
            padding: 7px; 
            border-radius:5px; 
            width: 200px; 
            border:2px solid #e8491d;
            margin-right:10px;
            }

            .searchform{
              display:flex;
              width: 100%;
              margin-top: none;
            }

            a{
              color:black;
            }

            .keysearch{
              float:right;
            }

            .keysearch input{
              padding: 7px;
              border-radius: 5px;
              width: 200px;
              border: 2px solid #e8491d;
            }
            
            h2{
              margin:0px 10px 0px 0px;
            }
          </style>
  </head>


  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Hotel</span> Booking</h1>
        </div>
        <div class="log_status" style="display:inline-block;">
        <?php
            if (! empty($_SESSION['logged_in']))
            {
               echo  '<div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn"></button>
                          <div id="myDropdown" class="dropdown-content">
                            <a href="/hotelBooking/check_update.php">My Bookings</a>
                            <a href="/hotelBooking/cancel.php">Cancel Bookings</a>
                            <a href="/hotelBooking/logout.php">Logout</a>
                          </div>
                        </div>&nbsp&nbsp
               Welcome '.$_SESSION['name'];
            }
          ?>
        </div>
        
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
      <h3 style="margin:0;">Search by Area </h3>
        <form method="POST" action="" class="searchform" style="display:inline;">

          <div class="area" style="display:inline;">
            <select style="" name="area">
            <?php $q = mysqli_query($con, "SELECT location FROM hotels");
              while($row = mysqli_fetch_array($q)) { ?>
              <option value="<?php echo $row['location']; ?>"><?php echo $row['location']; ?></option>
              <?php } ?>
            </select>
            <button type="submit" name="submit" class="button_1">Search</button>
          </div>
          </form>

          <form method="POST" action="" style="display:inline;">
          <div class="keysearch">
            <input type="text" name="keyword" placeholder="Search..." style="height: 38px;
                                                          border-radius: 5px 0 0 5px; 
                                                          width: 280px; 
                                                          border: 3px solid #e8491d;"><button type="submit" name="search" class="searchbtn" style="height: 38px; background: #e8491d; border: 0; border-radius: 0 5px  5px 0; padding-left: 20px; padding-right: 20px; color: #ffffff;">Go</button>
          </div>
        </form>
      </div>
    </section>

    <section class="content">

    <!-- for area search -->
      <?php 

      if (isset($_POST["area"])){

        $area=$_POST["area"];
        
          $sql = "SELECT * FROM hotels where location='$area'";
          $result = mysqli_query($con,$sql) or die(mysqli_error($con));
          

          if(mysqli_num_rows($result)==0){
            echo '<p align="center" style="color:red;font-weight:bold;">Sorry no results were found</p>';
          }

          else{
          while ($row = mysqli_fetch_array($result))
          {
              echo '<section style="padding:20px 60px;width: 100%; overflow: hidden;">
                      <div style="width:150px;height:150px;background:red;float:left;">
                        <img src="'.$row['icon'].'" alt="icon" width=150px,height=150px style="box-shadow: 4px 4px 7px #5e5e5e;"/>
                      </div>
                      <div style="margin-left: 180px;word-wrap: break-word; box-shadow: 4px 4px 7px #5e5e5e;">
                      <p style="margin:2px;font-weight: bold;"><a href="/hotelBooking/hotelprofile.php?hotelid={'.$row['hotelid'].'}">'.$row['name'].'</a></p>
                      <p style="margin:2px;">'.$row['description'].'</p>
                      <P style="margin:2px;font-weight: bold;">Address:</p>
                      <p style="margin:2px;">'.$row['location'].', '.$row['address'].'</p>
                      <p style="margin:2px;font-weight: bold;">Rating: '.$row['rating'].'</p>
                      </div><br><hr>
                    </section>';
          } 
      }
    } ?>

<!-- for keyword search -->
<?php
if(isset($_POST['search'])){
$search_value=$_POST["keyword"];
$sql = "SELECT * FROM hotels WHERE name LIKE '%$search_value%' OR description LIKE '%$search_value%'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));


if(mysqli_num_rows($result)==0){
  echo '<p align="center" style="color:red;font-weight:bold;">Sorry no results were found</p>';
}

else{
while ($row = mysqli_fetch_array($result))
{
    echo '<section style="padding:20px 60px;width: 100%; overflow: hidden;">
            <div style="width:150px;height:150px;background:red;float:left;">
              <img src="'.$row['icon'].'" alt="icon" width=150px,height=150px style="box-shadow: 4px 4px 7px #5e5e5e;"/>
            </div>
            <div style="margin-left: 180px;word-wrap: break-word; box-shadow: 4px 4px 7px #5e5e5e;">
            <p style="margin:2px;font-weight: bold;"><a href="/hotelBooking/hotelprofile.php?hotelid={'.$row['hotelid'].'}">'.$row['name'].'</a></p>
            <p style="margin:2px;">'.$row['description'].'</p>
            <P style="margin:2px;font-weight: bold;">Address:</p>
            <p style="margin:2px;">'.$row['location'].', '.$row['address'].'</p>
            <p style="margin:2px;font-weight: bold;">Rating: '.$row['rating'].'</p>
            </div><br><hr>
          </section>';
    } 
}
}
?>

    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/logo_html.png">
          <h3>Best Food</h3>
          <p>Our Hotels offers some of most sought-after dining experiences with internationally recognized standards for service and cuisine. Appease your taste buds and dine in style!</p>
          <a href="services.html" style="color:gray;">Read more...</a>
        </div>
        <div class="box">
          <img src="./img/logo_css.png">
          <h3>24X7 Support</h3>
          <p>Our Hotels and Resorts are renowned for the luxury experience they provide to their guests and you can rest assured that we will do our utmost to ensure your well-being and safety.</p>
          <a href="services.html" style="color:gray;">Read more...</a>
        </div>
        <div class="box">
          <img src="./img/logo_brush.png">
          <h3>Other Services</h3>
          <p>Offering indoor/outdoor pool, hi-speed wi-fi, fitness centers, cafes and many other amenities.</p>
          <a href="services.html" style="color:gray;">Read more...</a>
        </div>
      </div>
    </section>

    <footer>
      <p>Hotel Booking, Copyright &copy; 2019</p>
    </footer>

    <script type="text/javascript">
      function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
</script>
  </body>
</html>
