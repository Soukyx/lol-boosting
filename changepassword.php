<?php 

  session_start();

  include("connection.php");
  include("functions.php");
  $user_data = check_login($con);
  if(isset($_POST['update'])) {

    $oldpass = ($_POST['oldpass']);
    $newpass = ($_POST['newpass']);
    $confirmpass = ($_POST['confirmpass']);

    $query = "SELECT password FROM users WHERE password = '$oldpass'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {

      if($newpass == $confirmpass) {

        $query = "UPDATE users SET password = '$newpass' WHERE user_id='".$user_data['user_id']."'";

        if($result = mysqli_query($con, $query)) {

          $user_data['prompt'] = "Password updated.";
          $user_data['password'] = $newpass;
          header("location:profile.php");
          exit;

        } else {

          die("Error with the query");

        }

      } else {

        $user_data['errprompt'] = "The new passwords you entered doesn't match.";;

      }

    } else {

      $user_data['errprompt'] = "You've entered a wrong old password.";

    }

  }



?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Change Password - ShinobiBoosting</title>
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
      <h1>Password Change</h1>
      <?php 
        if(isset($_SESSION['errprompt'])) {
          showError();
        }
      ?>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">


        <div class="form-group">
          <label for="oldpass">Old Password</label>
          <input type="password" class="form-control" name="oldpass" placeholder="Old Password" required>
        </div>


        <div class="form-group">
          <label for="newpass">New Password</label>
          <input type="password" class="form-control" name="newpass" placeholder="New Password" required>
        </div>

        <div class="form-group">
          <label for="confirmpass">Confirm Password</label>
          <input type="password" class="form-control" name="confirmpass" placeholder="Confirm Password" required>
        </div>

        <div class="form-footer">
          <a href="profile.php">Go back</a>
          <input class="btn btn-primary" type="submit" name="update" value="Update Password">
        </div>
        

      </form>
    </div>

  </section>
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
