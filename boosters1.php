<?php
session_start();
  include 'backend/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boosters.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>SPSUL - lol boosting</title>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;"
    >
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color:rgba(0, 0, 0, 0.7);">
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
        <a class="nav-link" href="login1.php">Login</a>
        </li>
      </ul>
      </div>
    </nav>
    <!--konec navbaru-->
    <!--container-->
    <div class="container">
    <div id="card" class="card card-container">
    <div class="table-wrapper">
            <div class="table-title">
                    <div class="col-sm-6">
						<h2>Our Boosters</h2>
					</div>
            <table class="table table-striped table-hover">
    <?php
				$result = mysqli_query($conn,"SELECT * FROM staff");
					while($row = mysqli_fetch_array($result)) {
				?>
        <div>
					<td><?php echo $row["staff_name"];?></td>  

					<td><?php echo $row["descr"]; ?></td>

					<td>
							<i class="material-icons update" data-toggle="tooltip"
							data-name="<?php echo $row["staff_name"]; ?>"
							data-email="<?php echo $row["descr"]; ?>">
              </td>
				</tr>
				<?php
				}
				?>
        </table>
      </div></div>
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