
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
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
    <div style="background-color: rgba(0, 0, 0, 0.7);">
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark">
      <!--logo stranky=odkaz na homepage-->
      <a class="navbar-brand navbar-nav" href="index.html">
        <img id="logo" src="logo.png" alt="logo" style="width:32px;">Shinobi | Boosting
      </a>
            <!--navbar a collapse pri zmenseni stranky-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-xl-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="order.html">Order Now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.html">FaQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="boosters1.php">Our Boosters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
        <li class="nav-item" id="review">
          <a class="nav-link" href="review1.php">Review</a>
        </li>
        <li class="nav-item " id="login">
          <a class="nav-link" href="login1.php">Login</a>
        </li>
      </ul>
      </div>
    </nav>
    <!--konec navbaru-->
    <!--container-->
    <div class="container">
      <!--login karta-->
        <div id="card" class="card card-container">
          <div id="logintext"class="text-center">
            <h1>Login</h1>
            </div>
            <!--formy na login-->
            <form action="login.php" class="form-signin" method="post">
              <br>
                <h4>Name</h4>
                <input name="user_name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
              
                <h4>Password</h4>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <br>
                <?php
                if(isset($_GET['error'])==true){
                  echo'<p>Wrong Name or Password.</p>';
                }
                ?>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>
            <a href="register1.php" class="forgot-password">
            Not registered yet?
            </a>
            <br>
    </div>
    </div>
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