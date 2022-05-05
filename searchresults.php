<?php 


session_start();
include 'backend/database.php';
include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="ajax/admin.js"></script>
    <title>SPSUL - lol boosting</title>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
    <!-- navbar -->
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
    

  <section>

    <?php 

      if(isset($_GET['search'])) {

        $s = $_GET['searchbox'];

        $query = "SELECT user_name, email, usertype, pp FROM users WHERE user_name = '$s' OR user_name = '$s' ORDER BY id DESC LIMIT 5";
    ?>

    <div class="container">
    <div id="card" class="card card-container col-md-4">
    <div class="text-center">
      <h4 class="title">Search results for "<?php echo $s; ?>".</h4>


    


    <?php

        if($result = mysqli_query($con, $query)) {

          if(mysqli_num_rows($result) == 0) {

            echo "<p>No results matches to your query.</p>";
            echo "</div>";

          } else {
            echo "</div>";
            echo "<ul class='profile-results'>";

            while($user_data = mysqli_fetch_assoc($result)) {

          ?>
      <?php

				?>
        <br>
              <li>
   

                  <div class='info'><img src="upload/<?=$user_data['pp']?>" class="img-fluid rounded-circle" alt="Rounded Image" style="width:150px; height:150px;"></div>
                  <br>
                  <div class='info'><p class="inf">Name: <?php echo $user_data['user_name']; ?></p></div>
                  <div class='info'><p class="inf">Email: <?php echo $user_data['email']; ?></p></div>
                  <div class='info'><p class="inf">Usertype: <?php echo $user_data['usertype']; ?></p></div>

          
              </li>

          <?php

            }

            echo "</ul>";

          }

        } else {
          die("Error with the query");
        }

      }

    ?>
  
<br>
<div class="col-md-12">
      <a class="btn btn-lg btn-primary btn-block" href="#deleteUserModal" class="delete" data-id="<?php echo $row["user_id"]; ?>" data-toggle="modal">Delete User</a>
    </div>
    <br>
  <div class="col-md-12">
      <a class="btn btn-lg btn-primary btn-block" href="adminindex.php">Exit</a>
    </div>
    </div>
    </div>
  </section>


    <footer class="container-fluid text-center">
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
         associated with or endorsed by Riot Games, Inc.
          <br>
          © 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p></footer>
    <script src="main.js"></script>
  <script src="jquery-3.1.1.min.js"></script>
</body>
</html>
