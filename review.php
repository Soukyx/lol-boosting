<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ShinobiBoosting - Profile</title>
  <link rel="stylesheet" href="css/review.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/da437b991a.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="ajax/review.js"></script>
  <script src="ajax/star.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
  <div style="background-color:rgba(0, 0, 0, 0.7); border-bottom:solid 1px #ccc;">
    <!-- navbar -->
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
    <h3 id="podnadpis2" class="mx-auto text-center">Customer satisfaction is our main goal. See what our customers are saying.</h3>

    <br>
    <br>
  </div>
  <!--konec navbaru-->
  <div style="background-color:rgba(33, 33, 33);  box-shadow: inset 0px 3px 35px 0px black;">
    <br>
    <div class="container">
      <div id="card" class="card card-container">
        <p id="success"></p>

        <div class="table-title">
          <div class="row">
            <div class="col-sm-6">
              <h2>Reviews</h2>
            </div>
            <div class="col-sm-4 justify-align-right float-right">
              <a href="#addEmployeeModal" id="btn" class="btn btn-success " data-toggle="modal"> <span>Add New Review</span></a>
            </div>
          </div>
        </div>
        <tbody>
          <hr>
          <?php
          $result = mysqli_query($conn, "SELECT * FROM reviews");
          $i = 1;
          while ($row = mysqli_fetch_array($result)) {
          ?>

            <tr id="<?php echo $row["review_id"]; ?>">
              <h5><?php echo $row["user_name"]; ?></h5>
              <div class="text-justify row col-md-12">
                <td><?php echo $row["user_rate"]; ?><p>/10</p>
                </td>
              </div>
              <div class="text-justify row col-md-12">
                <td><?php echo $row["user_review"]; ?></td>
              </div>
              <br>
              <hr>
            </tr>
          <?php
            $i++;
          }
          ?>
        </tbody>

      </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(44, 44, 44);">
          <form id="user_form">
            <div class="modal-header">
              <h4 class="modal-title" style="color: #d5d5d5;">Add Review</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label style="color: #d5d5d5;">NAME</label>
                <input type="text" id="name" name="user_name" value="<?php echo $user_data['user_name']; ?>" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label style="color: #d5d5d5;">RATE 1 TO 10</label>
                <input type="number" id="rate" name="user_rate" class="form-control" min="1" max="10">
              </div>
              <div class="form-group">
                <label style="color: #d5d5d5;">REVIEW</label>
                <textarea type="text" id="email" name="user_review" class="form-control md-textarea" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" value="1" name="type">
              <input type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal" value="Cancel">
              <button type="button" class="btn btn-lg btn-primary btn-block btn-signin" id="btn-add">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="container-fluid text-center">
    <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
      associated with or endorsed by Riot Games, Inc.
      <br>
      ?? 2021-2023 - ShinobiBoosting. All Right Reserved.
    </p>
  </footer>

</body>

</html>