<?php
session_start();
  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ShinobiBoosting</title>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;"
    >
    <!-- navbar -->
    <div style="background-color:rgba(0, 0, 0, 0.7);">
    <nav class="navbar navbar-expand-md navbar-dark">
      <!--logo stranky=odkaz na homepage-->
      <a class="navbar-brand navbar-nav" href="index.php">
        <img id="logo" src="logo.png" alt="logo" style="width:32px;">Shinobi | Boosting
      </a>
            <!--navbar a collapse pri zmenseni stranky-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-xl-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="order.php">Order Now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">FaQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="boosters.php">Our Boosters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item" id="review">
          <a class="nav-link" href="review.php">Review</a>
        </li>
        <li class="nav-item " id="login">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
      </ul>
      </div>
    </nav>
    <!--konec navbaru-->

   <!--container-->
   <div class="container">
      <img src="logo.png" id="homelogo" class="mx-auto d-block">
      <br>
      <H1 class="mx-auto text-center">Shinobi | Boosting</H1>
      <p id="podnadpis" class="mx-auto text-center">League of Legends Elo Boosting</p>
      <br>
      <h1 class="text-center" style="color:#00aaff">Hello, <?php echo $user_data['user_name'];?>!</h1>
    </div>
    
    </div>
    <div class="content-bg">
      <br>
    <div id="content" class="row" style="margin: auto;">
    <div class="textcontent col-sm-6 bg-black">
      <h2 class="text-left">How it works</h2>
      <details>
        <summary>Customize your order</summary>
          <p>Choose your current and desired rank then choose optionals.</p>
      </details>
      <details>
        <summary>Payment</summary>
          <p>You can pay only with PayPal.</p>
      </details>
      <details>
        <summary>Access to your account</summary>
          <p>After you pay, you shouldn't login to your account till order is done.
          <br>
           With buying order you need to write down login to your account.</p>
      </details>
    </div>
    <div>
    <img src="laptop.png" class="float-right mx-auto d-block" id="laptop">
    </div>
    </div>
    </div>
    <!--footer-->
    <div style="background-color:rgba(0, 0, 0, 0.7);">
    <footer class="container-fluid text-center">
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
         associated with or endorsed by Riot Games, Inc.
          <br>
          © 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p>
    </footer>
</div>
</body>
</html>