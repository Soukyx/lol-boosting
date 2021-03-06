<?php
session_start();
include("connection.php");
include("functions.php");
include 'backend/database.php';
$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/boosters.css">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>SPSUL - lol boosting</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
  <!-- navbar -->
  <div style="background-color:rgba(0, 0, 0, 0.7); border-bottom:solid 1px #ccc;
    border-color: white;">
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
    <br>
    <img src="logo.png" id="homelogo" class="mx-auto d-block">
    <br>
    <h1 id="nadpis" class="mx-auto text-center">Shinobi | Boosting</h1>
    <p id="podnadpis" class="mx-auto text-center">League of Legends Elo Boosting</p>
    <br>
    <h3 id="podnadpis2" class="mx-auto text-center">The booster will login and play from your account until you reach your desired rank.</h3>

    <br>
    <br>
  </div>
  <!--konec navbaru-->
  <!--container-->
  <div style="background-color:rgb(33, 33, 33); margin: auto;  box-shadow: inset 0px 3px 35px 0px black;">
    <br>
    <div class="container">

      <div id="card" class="card card-container col-md-12">

        <h1 class="text-center">Our Boosters</h1>
        <hr>
        <div class="table-wrapper">
          <div class="table-title">
            <table class="table table-striped table-hover">
              <div class="container text-center">
                <div class="row">
                  <?php
                  $result = mysqli_query($conn, "SELECT * FROM staff");
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                    <div id="card2" class="card col-md-3 text-center" style="margin: 50px;">
                      <div class="text-center">
                        <img src="upload/<?= $row['pp'] ?>" class="img-fluid rounded-circle" alt="Rounded Image" style="  width:150px; height:150px;">
                        <hr>
                        <h2><?php echo $row["staff_name"]; ?></h2>
                        <p class="title"><?php echo $row["descr"]; ?></p>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--footer-->
  <footer class="container-fluid text-center">
    <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
      associated with or endorsed by Riot Games, Inc.
      <br>
      ?? 2021-2023 - ShinobiBoosting. All Right Reserved.
    </p>
  </footer>

</body>

</html>