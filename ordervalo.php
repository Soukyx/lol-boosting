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
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <script src="https://kit.fontawesome.com/da437b991a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>SPSUL - lol boosting</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(images/valo.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
  <!-- navbar -->
  <div style="background-color:rgba(0, 0, 0, 0.7); border-bottom:solid 1px #ccc;
    border-color: white;">
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
          <li class="nav-item dropdown">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle" id="dropbtn" data-toggle="dropdown">
                Order Now
              </button>
              <div class="dropdown-menu text-center" id="dropdown-menu">
                <a class="dropdown-item" href="order.php">
                  <img alt="LoL Boosting" style="width:32px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/lol.svg">
                  League of Legends
                </a>
                <a class="dropdown-item" href="ordertft.php">
                  <img alt="TFT Boosting" style="width:32px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/tft.svg">
                  Teamfight Tactics
                </a>
                <a class="dropdown-item" href="ordervalo.php">
                  <img alt="Valorant Boosting" style="width:32px;" class="me-1 game-icon" src="https://www.gameboost.eu/assets/img/svg/val.svg">
                  VALORANT
                </a>
              </div>
            </div>
          </li>
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
    <br>
    <img src="logo.png" id="homelogo" class="mx-auto d-block">
    <br>
    <h1 id="nadpis" class="mx-auto text-center">Shinobi | Boosting</h1>
    <p id="podnadpis" class="mx-auto text-center">Valorant Elo Boosting</p>
    <br>
    <h3 id="podnadpis2" class="mx-auto text-center">The booster will login and play from your account until you reach your desired rank.</h3>

    <br>
    <br>
  </div>
  <div style="background-color:rgb(33, 33, 33); margin: auto; box-shadow: inset 0px 7px 50px 0px black;" class="row">
    <br>

    <br>
    <div id="card2" class="card card-container col-md-7 h-100">
      <div class="row text-center">
        <div class="col-md-6">
          <h3>Before</h3>
        </div>
        <div class="col-md-6">
          <h3>After</h3>
        </div>
        <div class="col-md-6">
          <img id="img" src="https://overboost.pro/catalog/view/theme/overboost/image/valorant/ValorantPlacementGames.webp" alt="">
        </div>
        <div class="col-md-6">
          <img id="img2" src="https://overboost.pro/catalog/view/theme/overboost/image/valorant/ValorantPlacementGames.webp" alt="">
        </div>
        <hr>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <h1 id="nadpis">Why choose us?</h1>
          <br>
          <br>
        </div>

      </div>
      <div class="row gx-lg-8 gx-xl-12 gy-8">
        <div class="col-md-6">
          <div class="d-flex flex-row">
            <div class="col-md-2">
              <h1>
                <i class="fa-fw fa fa-user-shield"></i>
              </h1>
            </div>
            <div>
              <h4 class="float-left" id="nadpis3">Appear Offline</h4>
              <p class="float-left">No one on your friend list will see the booster playing on your account.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="d-flex flex-row">
            <div class="col-md-2">
              <h1>
                <i class="fa-fw fa fa-globe"></i>
              </h1>
            </div>
            <div>
              <h4 class="float-left" id="nadpis3">VPN Encryption</h4>
              <p class="float-left">Keep your account safe with our free vpn encryption services.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="d-flex flex-row">
            <div class="col-md-2">
              <h1>
                <i class="fa-fw fa fa-map"></i>
              </h1>
            </div>
            <div>
              <h4 class="float-left" id="nadpis3">Order Tracking</h4>
              <p class="float-left">Track your elo boost's progress easily on your personal client area.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="d-flex flex-row">
            <div class="col-md-2">
              <h1>
                <i class="fa-fw fa fa-sliders"></i>
              </h1>
            </div>
            <div>
              <h4 class="float-left" id="nadpis3">Free Extra Options</h4>
              <p class="float-left">Custom roles and champions, offline mode, VPN and much more for free.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="d-flex flex-row">
            <div class="col-md-2">
              <h1>
                <i class="fa-fw fa fa-percent"></i>
              </h1>
            </div>
            <div>
              <h4 class="float-left" id="nadpis3">Loyalty Rewards</h4>
              <p class="float-left">Win free LoL accounts, exclusive discounts, and insane giveaways.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="d-flex flex-row">
            <div class="col-md-2">
              <h1>
                <i class="fa-fw fa fa-laptop"></i>
              </h1>
            </div>
            <div>
              <h4 class="float-left" id="nadpis3">24/7 Live Support</h4>
              <p class="float-left">Our customer support team is here for you 24/7/365.</p>
            </div>
          </div>
        </div>


      </div>

    </div>

    <div class="col-md-1"></div>
    <!--konec navbaru-->
    <div id="card" class="card card-container col-md-4">
      <div class="text-center" style="margin: auto;">
        <!--formy na zad??n?? po??adavk?? u objedn??vky-->
        <form>
          <div class="form-group col-md-12" style="margin: auto;">
            <H1 id="cr" class="text-center">Current Rank</H1>
            <h5 style="font-weight:200; color: #d5d5d5;;">Please select your Current Rank and Division.</h5>
            <br>
          </div>
          <div class="col-md-12 row" style="margin: auto;">
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="crank" id="ciron" value="100.000" onchange="calculate()">
              <label for="ciron"><img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/iron.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="crank" id="cbronze" value="200.000" onchange="calculate()">
              <label for="cbronze"><img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/bronze.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="crank" id="csilver" value="300.000" onchange="calculate()">
              <label for="csilver"><img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/silver.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="crank" id="cgold" value="400.000" onchange="calculate()">
              <label for="cgold"><img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/gold.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="crank" id="cplatinum" value="500.000" onchange="calculate()">
              <label for="cplatinum"><img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/platinum.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="crank" id="cdiamond" value="600.000" onchange="calculate()">
              <label for="cdiamond">
                <img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/diamond.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <br>
          </div>
          <br>
          <div class="col-md-12 row" id="desired-divisions" style="margin: auto;">
            <div class="col text-center col-md-4">
              <input class="d-none imgbgchk" type="radio" name="cdivision" value="3.0" id="ciii" onchange="calculate()">
              <label for="ciii">
                <h4>III</h4>
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-4">
              <input class="d-none imgbgchk" type="radio" name="cdivision" value="2.0" id="cii" onchange="calculate()">
              <label for="cii">
                <h4>II</h4>
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-4">
              <input class="d-none imgbgchk" type="radio" name="cdivision" value="1.0" id="ci" onchange="calculate()">
              <label for="ci">
                <h4>I</h4>
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
          </div>

          <br>
          <br>
          <hr>
          <br>

          <div class="form-group col-md-12">
            <H1 class="text-center">Desired Rank</H1>
            <h5 style="font-weight:200;color: #d5d5d5;">Please select your Desired Rank and Division.</h5>
          </div>
          <div class="col-md-12 row" style="margin: auto;">

            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="rank" id="iron" value="100.000" onchange="calculate()">
              <label for="iron">
                <img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/iron.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>

            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="rank" id="bronze" value="200.000" onchange="calculate()">
              <label for="bronze">
                <img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/bronze.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>

            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="rank" id="silver" value="300.000" onchange="calculate()">
              <label for="silver">
                <img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/silver.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="rank" id="gold" value="400.000" onchange="calculate()">
              <label for="gold">
                <img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/gold.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="rank" id="platinum" value="500.000" onchange="calculate()">
              <label for="platinum">
                <img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/platinum.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-2">
              <input class="d-none imgbgchk" type="radio" name="rank" id="diamond" value="600.000" onchange="calculate()">
              <label for="diamond">
                <img class="rank-select-mini" src="https://www.gameboost.eu/assets/img/ranks/val/mini/diamond.png">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
          </div>
          <br>
          <div class="col-md-12 row" id="current-divisions" style="margin: auto;">
            <div class="col text-center col-md-4">
              <input class="d-none imgbgchk" type="radio" name="division" value="3.0" id="iii" onchange="calculate()">
              <label for="iii">
                <h4>III</h4>
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-4">
              <input class="d-none imgbgchk" type="radio" name="division" value="2.0" id="ii" onchange="calculate()">
              <label for="ii">
                <h4>II</h4>
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class="col text-center col-md-4">
              <input class="d-none imgbgchk" type="radio" name="division" value="1.0" id="i" onchange="calculate()">
              <label for="i">
                <h4>I</h4>
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
          </div>
          <div class="form-group col-md-12">
            <h4>Server</h4>
          </div>
          <div class="form-group row col-md-12" style="margin: auto;">
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-8">
            <select id="srv" name="lolserver" class="form-control text-center" style="background-color: rgb(33,33,33); border-color: rgb(33,33,33); color: #d5d5d5;" required>
                  <option>EUW</option>
                  <option>EUNE</option>
                  <option>NA</option>
                </select>
            </div>
            <div class="form-group col-md-2">
            </Div>
          </div>
          <hr>
          <div class="form-group col-md-12" style="margin: auto;">
            <h4>Your price:</h4>
            <div class="row col-md-12">
              <div class="col-md-4">
              </div>
              <div class="col-md-12 row justify-content-center">
                <div class="col-md-2"></Div>
                <h3 class="text-center justify-content-center" style="color: #d5d5d5; "><input type="text" id="result" value="" class="col-md-8" readonly style="background-color: rgb(22,22,22); border: none; color: #d5d5d5;" onchange="calculate()"></h3>
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="form-group row">
            <div class="col-md-12">
            <script src="https://www.paypal.com/sdk/js?client-id=AfSn5KBMa2airN1Eyn-8WCwJQIX0fKt0mUeUN7Os1gmd-VPSZftT0dO2WTgZSrxIo82cWRXsS1mXGlh5&currency=USD&disable-funding=credit,card"></script>
              <div id="paypal-button-container"></div>
            </div>
          </div>
          <script>
            function calculate(price) {
              var crank = document.querySelector('input[name=crank]:checked').value || 0;
              var rank = document.querySelector('input[name=rank]:checked').value || 0;
              var cdivision = document.querySelector('input[name=cdivision]:checked').value || 0;
              var division = document.querySelector('input[name=division]:checked').value || 0;


              crank = parseInt(crank).toFixed(0);
              rank = parseInt(rank).toFixed(0);
              cdivison = parseInt(cdivision).toFixed(0);
              division = parseInt(division).toFixed(0);

              var i = parseInt((rank - crank) + (7 * cdivision) - (7 * division))


              if (i > 0) {
                document.getElementById("result").value = i + " $";
              } else {
                document.getElementById("result").placeholder = "Invalid values!";
              }
            }
          </script>
        </form>

      </div>


    </div>
    <br>
  </Div>

  </div>
  <!--footer-->
  <div style="background-color:black;">
    <footer class="container-fluid text-center bg-transparent position-sticky">
      <br>
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
        associated with or endorsed by Riot Games, Inc.
        <br>
        ?? 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p>
    </footer>
  </div>
  <script src="ajax/scriptvalo.js"></script>
</body>

</html>
<!-- Replace "test" with your own sandbox Business account app client ID -->

<!-- Set up a container element for the button -->

<script>
  paypal.Buttons({
    style: {
      color: 'blue',
      shape: 'pill'
    },
    // Sets up the transaction when a payment button is clicked
    createOrder: function(data, actions) {
      var crank = document.querySelector('input[name=crank]:checked').value || 0;
      var rank = document.querySelector('input[name=rank]:checked').value || 0;
      var cdivision = document.querySelector('input[name=cdivision]:checked').value || 0;
      var division = document.querySelector('input[name=division]:checked').value || 0;


      crank = parseInt(crank).toFixed(0);
      rank = parseInt(rank).toFixed(0);
      cdivison = parseInt(cdivision).toFixed(0);
      division = parseInt(division).toFixed(0);

      var i = parseInt((rank - crank) + (7 * cdivision) - (7 * division))
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: i // Can also reference a variable or function
          }
        }]
      });
    },
    // Finalize the transaction after payer approval
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(orderData) {
        // Successful capture! For dev/demo purposes:
        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
        var transaction = orderData.purchase_units[0].payments.captures[0];
        alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
        // When ready to go live, remove the alert and show a success message within this page. For example:
        // const element = document.getElementById('paypal-button-container');
        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
        // Or go to another URL:  actions.redirect('thank_you.html');
      });
    }
  }).render('#paypal-button-container');
</script>