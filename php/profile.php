<?php include_once("./CDN.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />    

   
   <style>
            <?php
                  include "../css/global.css";
                  include "../css/730px.css";
                  include "../css/514px.css";
                  include "../css/profile.css";
            ?>
    </style>    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

<!-- nav implements -->
<?php  include './nav.php' ?>

<!-- cards  -->

<h3 id= "yourAcc">Your Account</h3>

<div class="card-container">
    
    <div class="item" onclick = "show('Plan')">
        <img src="../images/profile/plan.svg" alt="">
        <span>Your Plan</span>
    </div>
    
    <div class="item" onclick = "show('Security')">
        <img src="../images/profile/security.svg" alt="">
        <span>Security</span>
    </div>
    
    <div class="item" onclick = "show('Wallet')">
        <img src="../images/profile/wallet.svg" alt="">
        <span>Your Wallet</span>
    </div>
    
    
    <div class="item" onclick = "show('Order')">
        <img src="../images/profile/your_order.svg" alt="">
        <span>Your Order</span>
    </div>
    
    <div class="item" onclick = 'show("Address")'>
        <img src="../images/profile/location.svg" alt="">
        <span>Address</span>
    </div>

    <div class="item" onclick = 'logout()'>
        <img src="../images/profile/logout.svg" alt="">
        <span>Logout</span>
    </div>
</div>
<div id = "modal" >
    <div id="info"  class="animate__animated animate__fadeInDown" style = "display : none; "  ><small onclick = 'c()'> &#x274C;</small></div>
</div>


<h3 id= "yourAcc" >More Item To Explore</h3>

<div class="carousel carousel-category" data-flickity='{ "groupCells": true }'>
<div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img70.jpg" alt=""></div>
      <div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img1.jpg" alt=""></div>
      <div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img20.jpg" alt=""></div>
      <div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img31.jpg" alt=""></div>
      <div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img40.jpg" alt=""></div>
      <div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img12.jpg" alt=""></div>
      <div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img10.jpg" alt=""></div>
      <div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img16.jpg" alt=""></div>
      <div class="carousel-cell" ><img class = "img-fluid" style = "height : 100%;" src="../images/product/img25.jpg" alt=""></div>
</div>


<!-- footer -->
<!-- Footer -->

<?php 

include "./footer.php";?>

<!-- Footer -->
<!-- end footer -->


</body>
<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/profile.js"></script>
<script src="../js/global.js"></script>

</html>