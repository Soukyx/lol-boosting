
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
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>SPSUL - lol boosting</title>
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
        <a class="nav-link" href="profile.php">Profile</a>
        </li>
      </ul>
      </div>
    </nav>
    <!--konec navbaru-->
    <br>
    <br>
    <br>
    <!--container-->
    <div class="container">
      <!--faq text kontent-->
      <div class="textcontent bg-black">
      <details>
        <summary>How does your service work?</summary>
          <p>You may choose one of our many ranked boosting services and customize your order to fulfill all your demands- summoners, champions and roles optimalization, 
            DuoQ boost or SoloQ boost, live streaming on private Twitch while completing your order or simple good old coaching.</p>
      </details>
      <details>
        <summary>How fast will my order be finished?</summary>
          <p>We usually do 1-2 divisions a day on all divisions.</p>
      </details>
      <details>
        <summary>How can I be sure my booster won't get me banned?</summary>
          <p>Our boosters are complete professionals and are not allowed to speak in game.</p>
      </details>
      <details>
        <summary>Can I play on my account while you are working on it?</summary>
          <p>To complete your order as fast as possible, you won't be allowed to access your account while we are working on it. 
            There's always going to be a booster finishing your order, however you always have the option to pause the boost so you can play normal games.</p>
      </details>
      <details>
        <summary>Can I tip my booster?</summary>
          <p>Yes, he gets full amount of the tip.</p>
      </details>
      <details>
        <summary>Which payment methods do you accept?</summary>
          <p>Right now we proccess payments through PayPal.</p>
      </div>
      </details>

       
    </div>
    <br>
    <br>
    <!--footer-->
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