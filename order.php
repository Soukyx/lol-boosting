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
        <H1>Current Rank</H1>
        <br>
        <div class="form-group row">
          <div class="form-group col-md-3">
            <select class="form-control">
              <option>Select Rank*</option>
              <option>Iron</option>
              <option>bronze</option>
              <option>Silver</option>
              <option>Gold</option>
              <option>Platinum</option>
              <option>Diamond</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select id="cdivision" onchange="calculate()" class="form-control">
              <option>Select Division*</option>
              <option id="itemprice" value="4.000">IV</option>
              <option id="itemprice" value="3.000">III</option>
              <option id="itemprice" value="2.000">II</option>
              <option id="itemprice" value="1.000">I</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control">
              <option>Select Current LP*</option>
              <option>0-20</option>
              <option>20-40</option>
              <option>40-60</option>
              <option>60-80</option>
              <option>80-99</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control">
              <option>Select LP Gains*</option>
              <option>1-5</option>
              <option>6-10</option>
              <option>10-15</option>
              <option>15-20</option>
              <option>20+</option>
            </select>
          </div>
        </div>    
      </form>
      <form>
        <H1>Desired Rank</H1>
        <br>
        <div class="form-group row">
          <div class="form-group col-md-3">
            <select class="form-control">
              <option>Select Rank*</option>
              <option>Iron</option>
              <option>bronze</option>
              <option>Silver</option>
              <option>Gold</option>
              <option>Platinum</option>
              <option>Diamond</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="division" onchange="calculate()">
              <option>Select Division*</option>
              <option id="itemprice" value="4.000">IV</option>
              <option id="itemprice" value="3.000">III</option>
              <option id="itemprice" value="2.000">II</option>
              <option id="itemprice" value="1.000">I</option>
          </select>
          </div>
        </div>    
      </form>
      <form>
        <H1>Options</H1>
        <br>
        <div class="form-group row">
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
          <div class="form-group col-md-3">
            <select class="form-control">
              <option>Select Spell Order*</option>
              <option>Flash D</option>
              <option>Flash F</option>
            </select>
          </div>
        </div>
        <br>
        <br>
        <div class="form-group  col-md-3 pull-right">
          <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Order</button>
        </div>    
        <p><input type="text" id="result" value="" disabled></p>  
      </form>
      <script type="text/javascript">
        function calculate(price){
            var cdivision = document.getElementById("cdivision").value || 0;

            var division = document.getElementById("division").value || 0;
            
            cdivison = parseFloat(cdivision).toFixed(2);
            division = parseFloat(division).toFixed(2);
            
            var result = parseFloat(cdivision/division*5).toFixed(2);
                            
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