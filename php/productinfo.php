<?php include_once("CDN.php");
      include "../database/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Info</title>
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
            include "../css/productinfo.css";
            include "../css/730px.css";
            include "../css/514px.css"; ?>
    </style>
  </head>
<body>

   <!-- nav bar -->
    <!-- up arrow -->

    <?php
include "./nav.php" ?>

    <!-- nav bar End -->

    <?php

  if(isset($_GET['pname']))
    {
      $pname = $_GET['pname'];

      // echo $pname;

      $getPinfo = "SELECT * FROM items WHERE pname = '".$conn->real_escape_string($_GET['pname'])."'";

      $result = $conn->query("$getPinfo");

      if($result->num_rows != 0 )
      {
        $row = $result->fetch_assoc();
        $pname = $row['pname'];

        $pPrice = $row['PRICE'];
        $pPrice = explode(",",$pPrice);
        
        $pMrp = $row['MRP'];
        $pQty = $row['QTY'];
        $pCat = $row['CATEGORY'];
        $pImg = $row['IMAGES'];
        $review = $row['REVIEW'];
        $review = explode("\n",$review);

        //render the product data dynemically

        echo '
        <div class="product-container mt-4">
            
            <!-- product img -->
            <div class="p-items p-img"><img class = "img-fluid" src="../images/product/'.$pImg.'" alt=""></div>
            
            <!-- product - deatails -->
            <div class="p-items p-details p-3">
                
                <h3>'.$pname.'</h3>
                
                <label for="qty" class = "mt-2" >MRP : <strong id = "qty">'.$pMrp.'</strong></label>
        
                <label for="qty">Net Wight : <strong id = "qty">'.$pQty.'</strong></label>
        
                <label for="qty">Category : <strong id = "qty">'.$pCat.'</strong></label>
                
                
                <label for="price-offer">Price Offers</label>
                
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                    <option selected>Select Price Offer</option>
                    <option value="1">'.$pPrice[0].'</option>
                    <option value="2">'.$pPrice[1].'</option>
                    <option value="3">'.$pPrice[2].'</option>
                    <option value="3">'.$pPrice[3].'</option>
                </select>
                
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Quantity</span>
                        <input type="number" class="form-control" value = 1 aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
            </div>
            
            <!-- buy and add button -->
            <div class=" p-items p-2 mt-5 p-buttons"> 
                <label for="qty" class = "mt-2">Plan Benifits : <strong id = "qty">10% off on total bill</strong></label>
                <label for="qty">Other Benifits : <strong id = "qty">Free delivery on Sat & Sun.</strong></label>
                <label for="qty">Delivery : <strong id = "qty">Only 15 mins away form your place. </strong></label>
                <button class="btn mt-2 btn-primary my-btn" >Add To Cart</button>
                <button class="btn mt-2 btn-primary my-btn">Buy Now</button>
                </div>
                </div>
                <h3 id= "yourAcc" >Product Review</h3>
                
                
                <div class = "p-4 w-50 ml-5">
                    
                    <p class = "p-2"><strong class = " d-block">Rahul</strong>'.$review[0].'</p>
                    
                    <p class = "p-2"><strong class = " d-block">Rahul</strong>'.$review[1].'</p>
                </div>
        ';
      }
      else
          echo "sorry";

          

    }
  else
    echo "sorry url error";
 ?>


 <!-- Customur review -->




<!-- Related Items -->

<h3 id= "yourAcc" >Related Items To Explore</h3>

<div class="carousel carousel-category mb-5" data-flickity='{ "groupCells": true }'>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img1.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img5.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img4.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img9.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img15.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img45.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img class = "img-fluid" src="../images/product/img55.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img64.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img78.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img23.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img34.jpg" alt="" srcset=""></div>
  <div class="carousel-cell"><img  class = "img-fluid"src="../images/product/img34.jpg" alt="" srcset=""></div>
</div>


<?php 

include "./footer.php";?>

</body>
<script src="../js/productinfo"></script>
</html>