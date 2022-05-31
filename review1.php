<?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/review.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;"
    >
    <!-- navbar -->
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
    <div style="background-color:rgba(33, 33, 33);">
    <br>
    <div class="container">
    <div id="card" class="card card-container">
	<p id="success"></p>
  
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Reviews</h2>
					</div>
                </div>
            </div>
				<tbody>
				<hr>
				<?php
				$result = mysqli_query($conn,"SELECT * FROM reviews");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
        
				<tr id="<?php echo $row["review_id"]; ?>">
					<h5><?php echo $row["user_name"]; ?></h5>
          <div class="text-justify row col-md-12"><td><?php echo $row["user_rate"]; ?><p>/10</p></td></div>
					<div class="text-justify"><td><?php echo $row["user_review"]; ?></td></div>
            <br><hr>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			
        </div>
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
          © 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p>
    </footer>

</body>
</html>                                		 