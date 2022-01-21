<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    <?php
        include "../css/nav.css";
        include "../css/global.css";
        include "../css/730px.css";
        include "../css/514px.css"; ?>
    </style>
</head>
<body>


<a href="#menu-icon" id = "uparrow">&uarr;</a>


<div id="mySidenav" class="sidenav">
  
  <form action="" method="post" id = "nav-form">
        <input type="text" name="search" placeholder = "Search..." id = "search-input">
        <button type="submit" id='search-button'><i class="fa fa-search "></i></button>
    </form>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#service">Services</a>
    <a href="#categories">Categories</a>
    <a href="#contact">About Us</a>
  </div>
  
  <!-- END Links -->
  
  <!-- nav partision   -->
  
  <nav id = "nav">
  
    <!-- mennu icon -->
    <span id = "menu-icon" onclick="openNav()">&#9776;</span>
  
    <!-- title name -->
    <a href = "http://localhost/College%20Project/php/home.php" id = "web-name"><img id = "logo" src="../images/nav/logo.png" alt="logo"></a>
  
  
    <!-- search and side buttons -->
    <div class="right-container">
  
      <!-- search -->
      <form action="" method="post" id = "regular-form">
        <input type="text" name="search" placeholder = "Search..." id = "search-input">
        <button type="submit" id='search-button'><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
  </button>
      </form>
  
      <!-- profile -->
      <a href="http://localhost/College%20Project/php/profile.php"><svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></a>
      <!-- cart -->
      <a href="http://localhost/College%20Project/php/cart.php"><svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a>
  
    </div>
  
  
  
  </nav>
  
  
</body>
<script><?php
include "../js/nav.js" ?></script>
</html>