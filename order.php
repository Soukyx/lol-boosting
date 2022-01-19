<?php
session_start();
  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/order.css">
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
    <div style="background-color:rgba(0, 0, 0, 0.7);">
    <nav class="navbar navbar-expand-md navbar-dark" style="  border-bottom:solid 1px #ccc;
    border-color: white;"> 
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
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
      </ul>
      </div>
    </nav>
    <!--konec navbaru-->
    <!--contaier-->
   <!--contaier-->
   <div style="background-color:rgba(0, 0, 0, 0.8);">
    <div class="container">
      <br>
      <!--formy na zadání požadavků u objednávky-->
      <form>
        <H1 id="cr" class="text-center">Current Rank</H1>
        <br>
        <div class="form-group row">
          <div class="form-group col-md-3">
          </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="crank" onchange="calculate()">
              <option>Select Rank*</option>
              <option id="itemprice" value="100.000">Iron</option>
              <option id="itemprice" value="200.000">bronze</option>
              <option id="itemprice" value="300.000">Silver</option>
              <option id="itemprice" value="400.000">Gold</option>
              <option id="itemprice" value="500.000">Platinum</option>
              <option id="itemprice" value="600.000">Diamond</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select id="cdivision" onchange="calculate()" class="form-control">
              <option>Select Division*</option>
              <option id="itemprice" value="4.0">IV</option>
              <option id="itemprice" value="3.0">III</option>
              <option id="itemprice" value="2.0">II</option>
              <option id="itemprice" value="1.0">I</option>
            </select>
          </div>
          <div class="form-group col-md-3"> 
          </div>
        </div>    
      </form>
      <form>
        <H1 class="text-center">Desired Rank</H1>
        <br>
        <div class="form-group row">
          <div class="form-group col-md-3"> 
          </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="rank" onchange="calculate()">
              <option>Select Rank*</option>
              <option id="itemprice" value="100.000">Iron</option>
              <option id="itemprice" value="200.000">bronze</option>
              <option id="itemprice" value="300.000">Silver</option>
              <option id="itemprice" value="400.000">Gold</option>
              <option id="itemprice" value="500.000">Platinum</option>
              <option id="itemprice" value="600.000">Diamond</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="division" onchange="calculate()">
              <option>Select Division*</option>
              <option id="itemprice" value="4.0">IV</option>
              <option id="itemprice" value="3.0">III</option>
              <option id="itemprice" value="2.0">II</option>
              <option id="itemprice" value="1.0">I</option>
          </select>
          </div>
        </div>
        <div class="form-group col-md-3"> 
        </div>
      </form>
      <form>
        <h1 class="text-center">Options</h1>
        <br>
        <div class="form-group row">
          <div class="form-group col-md-3"> 
          </div>
          <div class="form-group col-md-3">
            <select class="form-control">
              <option>Select Server*</option>
              <option>NA</option>
              <option>EUW</option>
              <option>EUNE</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control">
              <option>Select Queue*</option>
              <option>Ranked Solo/Duo</option>
              <option>Ranked Flex</option>
            </select>
          </div>
        </div>
        <br>
        <h4><input type="text" id="result" value="" readonly> $</h4>
        <br>
        <h4>You need to be logged in to order.</h4>
        <br>
        <div class="form-group row">
          <div class="form-group col-md-4"> 
          </div>    
        <div class="col-md-4">
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" disabled>Order</button>
        </div>
        <div class="col-md-4"> 
        </div>
        </div>
        </div>    
        
        <br>
      </form>
      <script type="text/javascript">
        function calculate(price){
            var crank = document.getElementById("crank").value || 0;
            var rank = document.getElementById("rank").value || 0;
            var cdivision = document.getElementById("cdivision").value || 0;
            var division = document.getElementById("division").value || 0;
            
            crank = parseFloat(crank).toFixed(0);
            rank = parseFloat(rank).toFixed(0);
            cdivison = parseFloat(cdivision).toFixed(0);
            division = parseFloat(division).toFixed(0); 

            var result = parseFloat((rank-crank)+(7*cdivision)-(7*division)).toFixed(0);
            if (result<0){
              document.getElementById("NaN").value=result;}             
            else {
              document.getElementById("result").value=result;}
            }
    </script>
    </div>
  </div>
</div>
    <!--footer-->
    <div style="background-color:rgba(0, 0, 0, 0.7);">
    <footer class="container-fluid text-center bg-transparent">
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
         associated with or endorsed by Riot Games, Inc.
          <br>
          © 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p>
    </footer>
  </div>
  </div>
</body>
</html>