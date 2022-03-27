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
  <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    </nav>
</div>
    <!--konec navbaru-->
    <div class="container">
    <div id="card" class="card card-container">
      <h1>My profile</h1>
      <br>
      <?php

        $query = "SELECT * FROM users WHERE user_name = '".$user_data['user_name']."' AND password = '".$user_data['password']."'";

        

        if($result = mysqli_query($con, $query)) {

          $row = mysqli_fetch_assoc($result);

        
          echo "<div><h4><strong>Name:</strong> <span>".$user_data['user_name']."</span></h2></div>";
          echo "<div><h4><strong>Email:</strong> <span>".$user_data['email']."</span></h2></div>";
          echo "<div><h4><strong>User:</strong> <span>".$user_data['usertype']."</span></h2></div>";

        } else {

          die("Error with the query in the database");

        }

      ?>
    
      <br>
      <div class="col-md-4">
        <a class="btn btn-lg btn-primary btn-block btn-signin" href="changepassword.php">Change Password</a>
        </div>
        <br>
        <div class="col-md-4">
        <a class="btn btn-lg btn-primary btn-block btn-signin" href="logout.php">Log Out</a>
        </div>
      </div>
      </div>
    <footer class="container-fluid text-center">
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
         associated with or endorsed by Riot Games, Inc.
          <br>
          © 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p></footer>
</body>
</html>
