<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ShinobiBoosting - Profile</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    </nav>

    <!--konec navbaru-->
    <div class="container">
      <div id="card" class="card col-sm-6 text-center">
        <div class="text-center">
          <h1>My Profile</h1>

          <hr>
          <br>
          <?php
          $result = mysqli_query($con, "SELECT * FROM users");
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <img src="upload/<?= $user_data['pp'] ?>" class="img-fluid rounded-circle" alt="Rounded Image" style="  width:150px; height:150px;">
            <br><br>
            <?php

            $query = "SELECT * FROM users WHERE user_name = '" . $user_data['user_name'] . "' AND password = '" . $user_data['password'] . "'";



            if ($result = mysqli_query($con, $query)) {

              $user_data = mysqli_fetch_assoc($result);


              echo "<div><h4><strong>Name:</strong> <span>" . $user_data['user_name'] . "</span></h2></div>";
              echo "<div><h4><strong>Email:</strong> <span>" . $user_data['email'] . "</span></h2></div>";
              echo "<div><h4><strong>User:</strong> <span>" . $user_data['usertype'] . "</span></h2></div>";
            } else {

              die("Error with the query in the database");
            }

            ?>

            <br>
            <div class="container">
              <div class="row">
                <div class="text-center col">
                  <div class="col-md-12">
                    <form enctype="multipart/form-data" method="post" action="backend/changepp.php">
                      <h4 class="form-label">Update Picture</h4>
                      <input type="file" class="form-control" name="pp" style="background-color: rgb(22, 22, 22); border: none;">
                  </div> <br>
                  <div class="col-md-12">
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Upload New Picture</button>
                  </div>
                  </form>
                  <br>

                  <div class="col-md-12">
                    <a class="btn btn-lg btn-primary btn-block btn-signin" href="changepassword.php">Change Password</a>
                  </div>

                  <br>
                  <div class="col-md-12">
                    <a class="btn btn-lg btn-primary btn-block btn-signin" href="logout.php">Log Out</a>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="container-fluid text-center">
    <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
      associated with or endorsed by Riot Games, Inc.
      <br>
      © 2021-2023 - ShinobiBoosting. All Right Reserved.
    </p>
  </footer>

</body>

</html>