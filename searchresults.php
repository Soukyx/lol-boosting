<?php 


session_start();

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
    <link rel="stylesheet" href="css/profile.css">
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
<div class="container">
    <div id="card" class="card card-container">

  <section>

    <?php 

      if(isset($_GET['search'])) {

        $s = $_GET['searchbox'];

        $query = "SELECT user_name, email, usertype FROM users WHERE user_name = '$s' OR user_name = '$s' ORDER BY id DESC LIMIT 5";
    ?>

    <div class="container">
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

              <li>
                <div class="result-box box-left">
                  <div class='info'><p>Name: <?php echo $user_data['user_name']; ?></p></div>
                  <div class='info'><p>Email: <?php echo $user_data['email']; ?></p></div>
                  <div class='info'><p>Usertype: <?php echo $user_data['usertype']; ?></p></div>
                </div>
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
      <a class="btn btn-lg btn-primary btn-block" href="adminindex.php">Exit</a>
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
    <script src="main.js"></script>
  <script src="jquery-3.1.1.min.js"></script>
</body>
</html>
