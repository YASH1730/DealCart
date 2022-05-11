<?php include "./CDN.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>

    <style>
      <?php
            include "../css/global.css";
            include "../css/730px.css";
            include "../css/514px.css";
            include "../css/cart.css";
      ?>
    </style>
  </head>
  <body>
    <!-- nav implements -->
    <?php  include './nav.php' ?>

    <h3 id="yourAcc">Shopping Cart</h3>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>


  
  <div id = "cart-container" ></div>
 


  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal"></div>
    </div>
    <!-- <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div> -->
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"></div>
    </div>
  </div>
      
      <button onclick = 'checkout()' class="checkout">Checkout</button>

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



<?php 

include "./footer.php";?>
  </body>
  <script src="../js/cart.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</html>
