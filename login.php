<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from registration where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
	
?>
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
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand navbar-nav" href="index.html">
        <img id="logo" src="logo.png" alt="logo" style="width:32px;">Shinobi | Boosting
      </a>
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
          <a class="nav-link" href="boosters.html">Our Boosters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
        <li class="nav-item" id="review">
          <a class="nav-link" href="review.html">Review</a>
        </li>
        <li class="nav-item " id="login">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
      </div>
    </nav>
    <!--container-->
    <div class="container">
      <!--login karta-->
        <div id="card" class="card card-container">
          <div id="logintext"class="text-center">
            <h1>Login</h1>
            </div>
            <!--formy na login-->
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="user_name" type="text" id="inputName" class="form-control" placeholder="User name" required autofocus>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
            <a href="register.php" class="forgot-password">
            Not registered yet?
            </a>
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

</body>
</html>