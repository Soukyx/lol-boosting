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
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>SPSUL - lol boosting</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
  <!-- navbar -->
  <div style="background-color:rgba(0, 0, 0, 0.7); border-bottom:solid 1px #ccc;">
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
          <li class="nav-item dropdown">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle" id="dropbtn" data-toggle="dropdown">
                Order Now
              </button>
              <div class="dropdown-menu text-center" id="dropdown-menu">
                <a class="dropdown-item" href="order.php">
                  <img alt="LoL Boosting" style="width:32px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/lol.svg">
                  League of Legends
                </a>
                <a class="dropdown-item" href="ordertft.php">
                  <img alt="TFT Boosting" style="width:32px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/tft.svg">
                  Teamfight Tactics
                </a>
                <a class="dropdown-item" href="ordervalo.php">
                  <img alt="Valorant Boosting" style="width:32px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/val.svg">
                  VALORANT
                </a>
              </div>
            </div>
          </li>
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
    <img src="logo.png" id="homelogo" class="mx-auto d-block">
    <br>
    <h1 id="nadpis" class="mx-auto text-center">Shinobi | Boosting</h1>
    <p id="podnadpis" class="mx-auto text-center">League of Legends Elo Boosting</p>
    <br>
    <h3 id="podnadpis2" class="mx-auto text-center">Our most frequently answered questions.</h3>

    <br>
    <!--konec navbaru-->
    <br>

    <!--container-->
  </div>
  <div style="background-color:rgba(44, 44, 44); box-shadow: inset 0px 3px 40px 0px black; margin: auto;">
    <br>
    <div class="container">
      <!--faq text kontent-->
      <div id="card" class="card card-container">
        <div class="textcontent bg-black">
          <details>
            <summary>How does your service work?</summary>
            <p>You may choose one of our many ranked boosting services and customize your order to fulfill all your demands- summoners, champions and roles optimalization,
              DuoQ boost or SoloQ boost, live streaming on private Twitch while completing your order or simple good old coaching.</p>
          </details>
          <hr>
          <details>
            <summary>How fast will my order be finished?</summary>
            <p>We usually do 1-2 divisions a day on all divisions.</p>
          </details>
          <hr>
          <details>
            <summary>How can I be sure my booster won't get me banned?</summary>
            <p>Our boosters are complete professionals and are not allowed to speak in game.</p>
          </details>
          <hr>
          <details>
            <summary>Can I play on my account while you are working on it?</summary>
            <p>To complete your order as fast as possible, you won't be allowed to access your account while we are working on it.
              There's always going to be a booster finishing your order, however you always have the option to pause the boost so you can play normal games.</p>
          </details>
          <hr>
          <details>
            <summary>Can I tip my booster?</summary>
            <p>Yes, he gets full amount of the tip.</p>
          </details>
          <hr>
          <details>
            <summary>Which payment methods do you accept?</summary>
            <p>Right now we proccess payments through PayPal.</p>
          </details>
          <hr>

        </div>
      </div>
      <br>
      <br>
    </div>
    <!--footer-->
    <footer class="container-fluid text-center" style="background-color: black;">
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
        associated with or endorsed by Riot Games, Inc.
        <br>
        ?? 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p>
    </footer>
</body>

</html>