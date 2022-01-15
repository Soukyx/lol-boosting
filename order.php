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
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
      <!--navbar-->
      <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand navbar-nav" href="index.php">
          <img id="logo" src="logo.png" alt="logo" style="width:32px;">Shinobi | Boosting
        </a>
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
    <!--contaier-->
    <div class="container">
      <!--formy na zadání požadavků u objednávky-->
      <form>
        <H1 style="text-align: center;">Current Rank</H1>
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
              <option id="itemprice" value="4">IV</option>
              <option id="itemprice" value="3">III</option>
              <option id="itemprice" value="2">II</option>
              <option id="itemprice" value="1">I</option>
            </select>
          </div>
          <div class="form-group col-md-3"> 
          </div>
        </div>    
      </form>
      <form>
        <H1 style="text-align: center;">Desired Rank</H1>
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
              <option id="itemprice" value="1">IV</option>
              <option id="itemprice" value="2">III</option>
              <option id="itemprice" value="3">II</option>
              <option id="itemprice" value="4">I</option>
          </select>
          </div>
        </div>
        <div class="form-group col-md-3"> 
        </div>
      </form>
      <form>
        <h1 style="text-align: center;">Options</h1>
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
        <div class="form-group row">
          <div class="form-group col-md-4"> 
          </div>    
        <div class="col-md-4">
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Order</button>
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
            
            crank = parseFloat(crank).toFixed(2);
            rank = parseFloat(rank).toFixed(2);
            cdivison = parseFloat(cdivision).toFixed(2);
            division = parseFloat(division).toFixed(2); 

            var result = parseFloat((rank-crank)-(cdivision-division)).toFixed(2);
                            
            document.getElementById("result").value=result;
        }
    </script>
    </div>
    <!--footer-->
    <footer class="container-fluid text-center bg-transparent">
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
         associated with or endorsed by Riot Games, Inc.
          <br>
          © 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p>
    </footer>
</body>
</html>