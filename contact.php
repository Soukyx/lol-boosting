<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
include 'mail.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
      </ul>
      </div>
    </nav>
    <!--konec navbaru-->
    <div class="container">
<!--zacatek kontakt formu-->
<div id="card" class="card card-container">
      <section class="mb-4">   
          <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Contact us here.</p>
          
          <div class="row">
              <div class="col-md-12 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                      <div class="row">   
                          <!--jmeno-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                  <input type="text" id="name" name="name" value="<?php echo $user_data['user_name']; ?>" class="form-control" disabled>
                              </div>
                          </div>    
                          <!--email-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                  <input type="text" id="email" name="email" value="<?php echo $user_data['email']; ?>" class="form-control" disabled>
                              </div>
                          </div>
                      </div>
      
                      <!--predmet-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                  <input type="text" id="subject" name="subject" class="form-control">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <!--zprava-->
                          <div class="col-md-12">
      
                              <div class="md-form">
                                <label for="message">Your message</label>
                                  <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                              </div>
      
                          </div>
                      </div>
                      <br>
                      <!--odeslat-->
                      <div class="text-center">
                        <input class="btn btn-lg btn-primary btn-signin" type="submit" name="submit" value="Submit">
                      </div>
                      
                  </form>
                  <br>
                  <hr>
                                <!--kontakt info zacatek-->
              <div class="row">
                <div class="text-center col-sm">
                     <i class="fas fa-map-marker-alt mt-4 fa-2x"></i>
                          <p>Teplice, CZ</p>
                      
                </div>
                <div class="text-center col-sm">
                      <i class="fas fa-phone mt-4 fa-2x"></i>
                          <p>666 172 852</p>
                      
              </div>
              <div class="text-center col-sm">
                      <i class="fas fa-envelope mt-4 fa-2x"></i>
                          <p>shinobiboosting@gmail.com</p>
                      
              </div>
              </div>
              </div>
      

              </div>
              <!--kontakt info konec-->
      
          </div>
      
      </section>
      <!--konec kontakt formu-->
    
    </div>
    <!--footer-->
    <footer class="container-fluid text-center">
      <p>League of Legends is registered trademark of Riot Games, Inc. We are in no way affiliated with,
         associated with or endorsed by Riot Games, Inc.
          <br>
          © 2021-2023 - ShinobiBoosting. All Right Reserved.
      </p>
    </footer>
  </div>
</body>
</html>