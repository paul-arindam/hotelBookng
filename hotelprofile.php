<?php 
session_start();
include('dbconnection.php');

$id =trim($_GET['hotelid'], '{}');
$_SESSION['hotelid']=$id;


$sql = "SELECT `name`,`icon`, `img1`, `img2`, `rate` FROM `hotels` WHERE hotelid='$id'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Book Hotels | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/loginForm.css">
    <link rel="stylesheet" href="./css/hotelprofile.css">
    <link rel="stylesheet" href="./css/slideshow.css">
  </head>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Hotel</span> Booking</h1>
        </div>

        <div class="log_status">
        <?php
            if (! empty($_SESSION['logged_in']))
            {
               echo  "<a href='logout.php' class='log'>Logout</a>";
               
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

    <section id="showcase">
      <div class="container">
        <h1>Luxury Hotels at affordable prices</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem interdum condimentum.</p>
      </div>
    </section>

    <div class="icon">
        <img src="<?php echo $row["icon"];?>" alt="icon" style="width:100px;height:100px;border:2px solid white; border-radius: 8px;"/>
    </div>

    <section class="formcontent">
        <div class="book">
            <form method="POST" action="/hotelBooking/book.php">
                <h2 align="center">Book Rooms at <?php echo $row['name'];?></h2>

                <p>Name</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="fname" placeholder="First Name">&nbsp;&nbsp;&nbsp;
                <input type="text" name="lname" placeholder="Last Name"><br>

                <p>E-mail</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email" name="email" placeholder="ex: yourname@gmail.com"><br>

                <p>Phone</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="phone" value="+91"><br>

                <p>Rooms</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" name="rooms" min="1" max="10"><br>

                <p>Guests</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" name="guests" min="0" max="10"><br>

                <p>Room type</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="roomtype" id="1" value="0" onclick="updateTotal()" checked> <label for="1">Standard</label>
                <input type="radio" name="roomtype" id="2" value="1596" onclick="updateTotal()"> <label for="2">Premium</label>
                <input type="radio" name="roomtype" id="3" value="2846" onclick="updateTotal()"> <label for="3">Deluxe</label><br>

                <p>Arrival Date</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="arrival"><br>

                <p>Departure Date</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="departure"><br>

                <hr>

                <label><strong>Total Bill: &#8377 <input type="text" name="bill" id="total" value="<?php echo $row['rate'];?>"></strong></label><br><br>

                <div class="btnwrapper">
                    <button type="submit" name="book" class="button_1">Book</button>&nbsp;&nbsp;
                    <button type="button" name="cancel" class="button_1" onclick="window.location.href='/hotelBooking/welcome.php'">Cancel</button>
                </div>


            </form>
        </div>
    </section>

    <br><hr>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/logo_html.png">
          <h3>Best Food</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
          <a href="services.html">Read more...</a>
        </div>
        <div class="box">
          <img src="./img/logo_css.png">
          <h3>24X7 Support</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
          <a href="services.html">Read more...</a>
        </div>
        <div class="box">
          <img src="./img/logo_brush.png">
          <h3>Best Room Services</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
          <a href="services.html">Read more...</a>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      var basePrice = <?php echo $row['rate'];?>;

      function updateTotal() {
          var radios = document.getElementsByName('roomtype');
          var extraPrice;
          var total_cost;
          
          for (var i = 0, length = radios.length; i < length; i++) {
              if (radios[i].checked) {
                  extraprice = parseInt(radios[i].value);
                  break;
              }
          }
        
          
          total_cost = basePrice + extraprice;
          document.getElementById('total').value = total_cost;

      }
    </script>
    <footer>
      <p>Hotel Booking, Copyright &copy; 2019</p>
    </footer>

  </body>
</html>
