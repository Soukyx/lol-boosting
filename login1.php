<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
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
    background-size: cover; height: 100%">
  <!--container-->
  <div class="container-fluid h-100 m-0">
    <div class="row justify-content-center h-100">
      <div class="col-md-6 h-100" style="background-color: rgb(44, 44, 44);	-webkit-box-shadow: inset -7px 0 20px -7px black;
	   -moz-box-shadow: inset -7px 0 20px -7px black;
	        box-shadow: inset -7px 0 20px -7px black;">
        <!--login karta-->
        <div id="card" class="card card-container">
          <div id="logintext" class="h-100 text-left col-md-12">
            <h2 style="font-weight: 200;">Log In to</h2>
            <a href="index.html" style="text-decoration: none;">
              <h2 style="text-decoration: none; color: #33aaff;">Shinobi Boosting</h2>
            </a>
            <hr>
          </div>
          <!--formy na login-->
          <form action="login.php" class="form-signin" method="post">
            <div class="col-md-12" style="margin:auto; padding:0; ">
              <br>
              <div class="col-md-12">
                <h4>Name</h4>
                <input name="user_name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
              </div>
              <div class="col-md-12">
                <h4>Password</h4>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>
              <br>
            </div>
            <div class="col-md-12 text-center">
              <?php
              if (isset($_GET['error']) == true) {
                echo '<p>Wrong Name or Password.</p>';
              }
              ?>
            </div>
            <div class="row col-md-12" style="margin:auto; padding:0;">
              <div class="col-md-6">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
              </div>
              <div class="col-md-6">
                <a href="register1.php" class="forgot-password">
                  Not registered yet?</a>
              </div>

            </div>


          </form>

        </div>
        <div class="text-center" style="margin-top:100px;">
          <p> © 2021-2023 - ShinobiBoosting. All Right Reserved.</p>
        </div>
      </div>

      <div class="col-md-6 text-center" style="padding: 0; background-color: rgb(33, 33, 33); margin: 0;">
        <div id="card" class="card">
          <a class="navbar-brand navbar-nav" href="index.html"><img src="logo.png" id="homelogo" class="mx-auto d-block"></a>
          <br>
          <H1 class="mx-auto text-center">Shinobi | Boosting</H1>
        </div>
      </div>

    </Div>
  </div>

</body>

</html>