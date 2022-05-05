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
    background-size: cover;"
    >
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
        <a class="nav-link" href="profile.php">Profile</a>
        </li>
      </ul>
      </div>
    </nav>
    <!--konec navbaru-->
    <div class="container">
    <div id="card" class="card card-container">
	<p id="success"></p>
  
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Reviews</h2>
					</div>
					<div class="col-sm-4 justify-align-right float-right">
          <a href="#addEmployeeModal" class="btn btn-success " data-toggle="modal"> <span>Add New Review</span></a>		
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
					<h5><?php echo $row["name"]; ?></h5>
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
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add Review</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="name" value="<?php echo $user_data['user_name']; ?>" class="form-control" readonly>
						</div>
            <section class='rating-widget'>
                  <!-- Rating Stars Box -->
                  <div class='rating-stars text-center'>
                    <ul id='stars'>
                      <li class='star' title='Poor' data-value='1'>
                      <i class="fa fa-star fa-fw"></i>
                      </li>
                      <li class='star' title='Fair' data-value='2'>
                      <i class="fa fa-star fa-fw"></i>
                      </li>
                      <li class='star' title='Good' data-value='3'>
                      <i class="fa fa-star fa-fw"></i>
                      </li>
                      <li class='star' title='Excellent' data-value='4'>
                      <i class="fa fa-star fa-fw"></i>
                      </li>
                      <li class='star' title='WOW!!!' data-value='5'>
                      <i class="fa fa-star fa-fw"></i>
                      </li>
                    </ul>
                  </div>
      </section>
						<div class="form-group">
							<label>REVIEW</label>
							<input type="text" id="email" name="user_review" class="form-control" required>
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
  <footer class="container-fluid text-center">
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
         associated with or endorsed by Riot Games, Inc.
          <br>
          © 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p>
    </footer>

</body>
</html>                                		 