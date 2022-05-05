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
  <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/da437b991a.js" crossorigin="anonymous"></script>
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
      <a class="navbar-brand navbar-nav" href="adminindex.php">
        <img id="logo" src="logo.png" alt="logo" style="width:32px;">Shinobi | Boosting
      </a>
            <!--navbar a collapse pri zmenseni stranky-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-xl-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="adminboosters.php">Our Boosters</a>
        </li>
        <li class="nav-item" id="review">
          <a class="nav-link" href="adminreview.php">Review</a>
        </li>
        <li class="nav-item " id="login">
          <a class="nav-link" href="adminindex.php">Profile</a>
        </li>
      </ul>
    </nav>
    
</div>

    <!--konec navbaru-->
    <div class="container">
    <div id="card" class="card card-container col-md-4">
    <div class="text-center">
      <h1>Admin</h1>
      <br>
      <div class="row">
      <div class="text-center col-md-12">
      <form class="navbar-form navbar-right col-md-12" action="searchresults.php" method="GET">

        <div class="search-area">
          <div class="form-group">
   
            <div class="search-wrap">

            <label for="searchbox" class="sr-only">Search:</label>
  <div class="input-group">
  <input type="text" class="form-control col-md-12" name="searchbox" id="searchbox" placeholder="Search users" required autocomplete="off">
    <div class="input-group-append">
      <button class="btn btn-secondary" name="search" value="Search" type="submit">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
              <div class="search-results hide"></div>

            </div>
            

          </div>
        </div>
        <br>
    </form>
    <br>
      <br>
      <div class="container">
      <div class="row">
      <div class="text-center col">
      <div class="col-md-12">
        <a class="btn btn-lg btn-primary btn-block btn-signin" href="changepassword.php">Change Password</a>
        </div>
        <br>
        <br>
        <div class="col-md-12">
        <a class="btn btn-lg btn-primary btn-block btn-signin" href="logout.php">Log Out</a>
        </div>
      </div>
      </div>
      </div>
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
      </p></footer>
	<script src="main.js"></script>
	<script src="bootstrap.min.js"></script>
  <script src="jquery-3.1.1.min.js"></script>
</body>
</html>
