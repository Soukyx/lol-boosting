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
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/da437b991a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>ShinobiBoosting</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
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
    <!--konec navbaru-->

    <!--container-->
    <div class="container">
      <img src="logo.png" id="homelogo" class="mx-auto d-block">
      <br>
      <H1 class="mx-auto text-center">Shinobi | Boosting</H1>
      <p id="podnadpis" class="mx-auto text-center">We provide high quality elo boosting, for the cheapest price, at the highest speed.</p>
      <br>
      <h3 id="podnadpis2" class="mx-auto text-center">Welcome to homepage.</h3>
      <br>
      <h1 class="text-center" id="podnadpis2" style="color:#00aaff">Hello, <?php echo $user_data['user_name']; ?>!</h1>

    </div>
  </div>
  <div class="content-bg">
    <div id="podnadpis" style="background-color: rgb(20, 20, 20 ); box-shadow: inset 0px 7px 50px 0px black; " class="text-center">
      <br>
      <p>OUR SERVICE</p>
      <br>
      <div class="row col-md-12" style="margin:0;">
        <div class="col-md-4"><a href="order.php">
            <button id="btnof">
              <div id="btncont"><img alt="LoL Boosting" style="width:60px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/lol.svg">
                <br>
                LoL boost
              </div>
            </button></a></div>
        <div class="col-md-4">
          <a href="ordertft.php">
            <button id="btnof">
              <div id="btncont">
                <img alt="TFT Boosting" style="width:60px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/tft.svg">
                <br>
                TFT boost
              </div>
            </button></a>
        </div>
        <div class="col-md-4">
          <a href="ordervalo.php">
            <button id="btnof">
              <div id="btncont">
                <img alt="Valorant Boosting" style="width:60px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/val.svg">
                <br>
                Val boost
              </div>
            </button>
        </div>
        </a>
      </div><br>
      <br>


      <div id="content" class="row col-md-12" style="border-top: solid; border-width:1px;  border-color:#d5d5d5;margin: 0; background-color: rgba(15, 15, 15); box-shadow: inset -7px 0 30px -7px black;">

        <br>
        <div class="col-md-2">

        </div>
        <div class="textcontent col-md-4">
          <br>
          <br>
          <h2 class="text-left">How it works </h2>
          <details class="text-left">
            <summary><i class="fa-fw fa fa-sliders"></i> Customize Your Order</summary>
            <p>Choose your current and desired rank then choose optionals.</p>
          </details>
          <details class="text-left">
            <summary><i class="fa-fw fa fa-check"></i> Complete Payment</summary>
            <p>You can pay only with PayPal.</p>
          </details>
          <details class="text-left">
            <summary><i class="fa-fw fa fa-arrow-right"></i> Access To Your Account</summary>
            <p>After you pay, you shouldn't login to your account till order is done.
              <br>
              With buying order you need to write down login to your account.
            </p>
          </details>
          <br>
        </div>
        <div class="col-md-4">
          <br>
          <img style="width: 300px;" src="images/boost.png"></img>
        </div>
        <div class="col-md-2"></div>

      </div>
    </div>
    <!--footer-->
    <div style="background-color:black;">
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