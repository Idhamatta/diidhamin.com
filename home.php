<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<!--
  Fox by FreeHTML5.co
  Twitter: https://twitter.com/fh5co
  Facebook: https://fb.com/fh5co
  URL: https://freehtml5.co
-->
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Diidhamin.com</title>

  <!-- Bootstrap CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid pl-0 pr-0 bg-img clearfix parallax-window2" data-parallax="scroll" data-image-src="images/black.jpg">
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container"> 
      <!-- Brand --> 
      <a class="navbar-brand mr-auto" href="#"><img src="images/logo.png" alt="FoxPro" /></a> 
      
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
      
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#about-us">About Us</a> </li>
          
          <li class="nav-item"> <a class="nav-link" href="#contact">Contact Us</a> </li>
          <li class="nav-item"> <a class="nav-link" href="cv">My CV</a> </li>
          <li class="nav-item"> <a class="nav-link" href="logout.php">Log-out</a> </li>
        </ul>
        <ul class="navbar-nav ml-5">
          <li class="nav-item"> <a class="nav-link btn btn-danger" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="fh5co-banner-text-box">
      <div class="quote-box pl-5 pr-5 wow bounceInRight">
        <h2> Diidhamin.com <br><span>Best Indonesian Shop</span> </h2>
      </div>
      <a href="#about-us" class="btn text-uppercase btn-outline-danger btn-lg mr-3 mb-3 wow bounceInUp">About</a> <a href="#contact" class="btn text-uppercase btn-outline-danger btn-lg mb-3 wow bounceInDown"> Contact</a> </div>
  </div>
</div>
<div class="container-fluid fh5co-network">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4 class="wow bounceInUp">FOR EVERYONE</h4>
        <h2 class="wow bounceInRight">MEMBERS</h2>
        <hr />
        <h5 class="wow bounceInLeft">MEMBERS WINTER 2021</h5>
        <p class="wow bounceInDown">This website is open to everyone. If you are not a member, please register on the column page that we have provided.<br></p>
        <h5 class="wow bounceInLeft"><strong>&copy; 2021 Diidhamin.com All rights reserved.</strong></h5>
      </div>
      <div class="col-md-6">
        <figure class="wow bounceInDown"> <img src="images/admin_idham.jpg" width="200" alt="idham" class="img-fluid" /> </figure>
      </div>
    </div>
  </div>
</div>
<div id="about-us" class="container-fluid fh5co-about-us pl-0 pr-0 parallax-window" data-parallax="scroll" data-image-src="images/black2.jpg">
  <div class="container">
    <div class="col-sm-6 offset-sm-6">
      <h2 class="wow bounceInLeft" data-wow-delay=".25s">ABOUT US</h2>
      <hr/>
      <p class="wow bounceInRight" data-wow-delay=".25s"><strong>Diidhamin.com is the best online shopping website in Indonesia.</strong><br>On this website we present an online shopping experience with the most comfortable facilities possible, so you won't move to another E-commerce.<br><strong>So don't forget to shop only on our best website, diidhamin.com</strong></p>
      </div>
  </div>
</div>
<div class="container-fluid fh5co-content-box">
  <div class="container">
    <div class="row">
      <div class="col-md-5 pr-0"><img src="images/black3.jpg" alt="gym" class="img-fluid wow bounceInLeft" /> </div>
      <div class="col-md-7 pl-0">
        <div class="wow bounceInRight" data-wow-delay=".25s">
          <div class="card-img-overlay">
            <p><strong>“Once a Baller Always a Baller.”</strong> </p>
          </div>
          <img src="images/field1.jpg" alt="field" class="img-fluid" /> </div>
      </div>
    </div>
    <div class="row trainers pl-0 pr-0">
      <div class="col-12 bg-50">
        <div class="quote-box2 wow bounceInDown" data-wow-delay=".25s">
          <h2> JERSEY EDITION </h2>
        </div>
      </div>
      <div class="col-md-6 pr-5 pl-5">
        <div class="card text-center wow bounceInLeft" data-wow-delay=".25s"> <img class="card-img-top rounded-circle img-fluid" src="images/jersey1.jpg" alt="Card image">
          <div class="card-body mb-5">
            <h4 class="card-title">DALLAS MAVERICKS</h4>
            <p class="card-text">Men's Dallas Mavericks Luka Doncic Nike White 2020/21 Swingman Player Jersey – City Edition</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 pl-5 pr-5">
        <div class="card text-center wow bounceInRight" data-wow-delay=".25s"> <img class="card-img-top rounded-circle img-fluid" src="images/jersey3.jpg" alt="Card image">
          <div class="card-body mb-5">
            <h4 class="card-title">LA LAKERS</h4>
            <p class="card-text">Youth Los Angeles Lakers LeBron James Fanatics Branded Purple 2018/19 Fast Break Replica Jersey - Statement Edition</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row gallery">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body mb-4 wow bounceInLeft" data-wow-delay=".25s">
            <h4 class="card-title">Le Bron James</h4>
            <p class="card-text">“I think the reason why I am who I am today is because I went through those tough times when I was younger.” </p>
          </div>
          <img class="card-img-top img-fluid wow bounceInRight" data-wow-delay=".25s" src="images/lebron.jpg" alt="lebron"> </div>
      </div>
      <div class="col-md-4">
        <div class="card"> <img class="card-img-top img-fluid wow bounceInUp" data-wow-delay=".25s" src="images/curry.jpg" alt="curry">
          <div class="card-body mt-4 wow bounceInDown" data-wow-delay=".25s">
            <h4 class="card-title">Stephen Curry</h4>
            <p class="card-text"> “I’ve never been afraid of big moments. I get butterflies… I get nervous and anxious, but I think those are all good signs that I’m ready for the moment.” </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body mb-4 wow bounceInRight" data-wow-delay=".25s">
            <h4 class="card-title">Kobe Bryant</h4>
            <p class="card-text">“The most important thing is to try and inspire people so that they can be great in whatever they want to do.”</p>
          </div>
          <img class="card-img-top img-fluid wow bounceInLeft" data-wow-delay=".25s" src="images/kobe.jpg" alt="kobe"> </div>
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-3 footer1 d-flex wow bounceInLeft" data-wow-delay=".25s">
        <div class="d-flex flex-wrap align-content-center"> <a href="#"><img src="images/logo.png" alt="logo" /></a>
          <p>Diidhamin.com is the best online shopping website in Indonesia.</p>
          <p>&copy; 2020 Diidhamin.com All rights reserved.<br> Design by <a href="https://instagram.com/idham_atta" target="_blank">Idham Atta</a>.</p>
        </div>
      </div>
      <div class="col-md-6 footer2 wow bounceInUp" data-wow-delay=".25s" id="contact">
        <div class="form-box">
          <h4>CONTACT US</h4>
          <table class="table table-responsive d-table">
            <tr>
              <td><input type="text" class="form-control pl-0" placeholder="NAME" /></td>
              <td><input type="email" class="form-control pl-0" placeholder="EMAIL" /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control pl-0" placeholder="ADDRESS" /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control pl-0" placeholder="MESSAGES" /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center pl-0"><button type="submit" class="btn btn-dark">SEND</button></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-3 footer3 wow bounceInRight" data-wow-delay=".25s">
        <h5>ADDRESS</h5>
        <p>Palembang, Indonesia</p>
        <h5>PHONE</h5>
        <p>081368618545</p>
        <h5>EMAIL</h5>
        <p>idhamatta2706@gmail.com</p>
        
      </div>
    </div>
  </div>
</footer>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Bootstrap JS, ... -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/wow.js"></script>
<script src="js/main.js"></script>

</body>
</html>