<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Book Hotels | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/loginForm.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Hotel</span> Booking</h1>
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
    <center>
        <h3 style="margin-bottom:10px;margin-top:100px;">Enter your invoice number</h3>
        <form method="GET" action="/hotelBooking/invoice2.php?invoice={$invoice_no}">
    <input type="text" name="invoice" placeholder="check..." style="height: 38px;
                                                          border-radius: 5px 0 0 5px; 
                                                          width: 280px; 
                                                          border: 3px solid #e8491d;"><button type="submit" name="search" class="searchbtn" 
                                                                style="height: 38px; 
                                                                background: #e8491d; 
                                                                border: 0; 
                                                                border-radius: 0 5px  5px 0;
                                                                padding-left: 20px;
                                                                padding-right: 20px; 
                                                                color: #ffffff;">Go</button>
            </form>
    </center>
  </body>
</html>
