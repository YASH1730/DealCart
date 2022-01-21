<?php include_once("./CDN.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    <?php
     include "../css/global.css";
     include "../css/banner.css";
     include "../css/730px.css";
     include "../css/514px.css";
      ?>
       /* Make the image fully responsive */

      </style>
</head>
<body>
<div class="slider">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/home/img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>NEW WAY TO PURCHASE YOUR PRODUCT</h5>
        <p style = "font:bolder;" >"&nbsp;A shop that has it all!!!"</p>
        <a href = "http://localhost/College%20Project/php/register.php" class="btn btn-primary">Shop Now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/home/img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>GET YOUR GROCERIES FROM YOUR NEARBY STORES</h5>
        <p>"&nbsp;All you need under one roof."</p>
        <a href = "http://localhost/College%20Project/php/register.php" class="btn btn-primary">Shop Now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/home/img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>NOW SHOP WITHOUT WORRYING ABOUT THE PRICES</h5>
        <p>"&nbsp;Shop, Relax, Enjoy!!!"</p>
        <a href = "http://localhost/College%20Project/php/register.php" class="btn btn-primary">Shop Now</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</body>
</html>