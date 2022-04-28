<?php include_once("CDN.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <style>
      <?php
            include "../css/global.css";
            include "../css/home.css";
            include "../css/730px.css";
            include "../css/514px.css"; ?>

    .shoppingButton{    background: orangered;
    margin: auto;
    width: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.shoppingButton a {
  text-decoration: none;
    color: wheat;
    font-weight: bolder;
}

    </style>
  </head>
  <body>
  
  <!-- nav bar -->

    <?php
include "./nav.php" ?>

    <!-- nav bar End -->
    <h1 class = 'text-center mt-5 ' >Thank You &#128512;</h1>
    <h4 class = 'text-center mt-5 ' >Your order will be confirmed shortlly !!! ;</h4>
</br>
    <div class=" btn btn-danger shoppingButton">
      <a href="http://localhost/College%20Project/php/home.php#categories">Continue Shopping </a>
    </div>
</body>
<script src="../js/thanks.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</html>