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
    </style>
  </head>
  <body>

  <!-- loader -->
      <div id = "loader-container"  >
        <div class="loader"></div>
      </div>

<div id = "super-container" class  = "animate__animated animate__fadeIn">
  <!-- up arrow -->
  
  <!-- nav bar -->

    <?php
include "./nav.php" ?>

    <!-- nav bar End -->

    <!-- slider -->

    <?php 
include "./banner.php" 
?>

<!-- end slider -->

<!-- offer-slider -->

    <?php 
include "./offer-slider.php" 
?>

<!-- end slider -->


    <!-- Catagory -->
    <br />
    <span class="heading animate__animated animate__fadeInLeft" id="categories"
      >Categories</span
    >

        <div
          class="carousel carousel-category"
          data-flickity='{ "groupCells": 4 }'
        >
          <div class="carousel-cell" onclick = "renderCat('Grains & Wheat',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c1.png" alt=""></div>
          <div class="carousel-cell" onclick = "renderCat('Daily Hygiene',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c2.png" alt=""></div>
          <div class="carousel-cell" onclick = "renderCat('Cooking Oil',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c3.png" alt=""></div>
          <div class="carousel-cell" onclick = "renderCat('Snacks',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c4.png" alt=""></div>
          <div class="carousel-cell" onclick = "renderCat('Dairy Products',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c5.png" alt=""></div>
          <div class="carousel-cell" onclick = "renderCat('Electronics & Accessories',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c6.png" alt=""></div>
          <div class="carousel-cell" onclick = "renderCat('Stationary',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c7.png" alt=""></div>
          <div class="carousel-cell" onclick = "renderCat('House Cleaning',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c8.png" alt=""></div>
          <div class="carousel-cell" onclick = "renderCat('Beverages',10)"><img class = "img-fluid" style = "height : 100%;" src="../images/categories/c9.png" alt=""></div>   
        </div>

    <!-- End Catagory -->

    <!-- feed -->
    <br />
    <div class="feed-container" id  = "feed">
  <!-- // data will render here with the help of ajax -->
    </div>

<!-- end feed -->

<button class = " btn viewmore" style  = " display: none;" id  = "view more">Veiw More</button>


<div id = "btn"></div>

<!-- Our Service -->
<span
      class="heading animate__animated animate__fadeInLeft"
      id="service"
    >Our Priorities </span>

    <div class="service-container">
      <div onclick = 'showInfo("payment")'  class="ser-item">
        <img src="../images/home/ser1.svg" alt="" class="img-fluid img-thumbnail" />
        <p>Secure Payment</p>
      </div>
      <div onclick = 'showInfo("support")' class="ser-item">
        <img src="../images/home/ser3.svg" alt="" class="img-fluid img-thumbnail" />
        <p>Support</p>
      </div>
      <div onclick = 'showInfo("fastD")' class="ser-item">
        <img
          src="../images/home/ser2.svg"
          alt=""
          class="img-fluid img-thumbnail mt"
        />
        <p>Fast Delivery</p>
      </div>
      <div onclick = 'showInfo("dealer")' class="ser-item">
        <img
          src="../images/home/ser4.svg"
          alt=""
          class="img-fluid img-thumbnail mt"
        />
        <p>Genuine Dealers</p>
      </div>
    </div>

<div id = "modal" >
    <div id="info"  class="animate__animated animate__fadeInDown" style = "display : none; "  ><small onclick = 'c()'> &#x274C;</small></div>
</div>

    <!-- End Our service -->


    <!-- contact -->
    
    <span class="heading animate__animated animate__fadeInLeft" id="contact">Contact</span>

    <div class="contact-container">

      <div class="details">
          <div class = "con-item"id="call"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg><p>+91 22 1234 5678</p></div>

          <div class = "con-item"id="email"><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg><p>dealcart@gmail.com</p></div>

          <div class = "con-item"id="location"><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
              </svg><p>Dargah Bazar, Ajmer, Rajasthan</p></div>

          <iframe class = "con-item" id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7143.649305927016!2d74.62751712326427!3d26.46138053815005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be71b2da1c09b%3A0x93f45646c3ce724d!2sDargah%20Bazar%2C%20Ajmer%2C%20Rajasthan%20305001!5e0!3m2!1sen!2sin!4v1638721928684!5m2!1sen!2sin"  allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="con-form">
        <form action="" class = "form">
          <label class = "form-item"for = "name">Your Name</label>
          <input type="text" id = "name" class="form-control">
          <label class = "form-item"for = "email">Your Email</label>
          <input type="email" id = "email" class="form-control">
          <label class = "form-item"for = "subject">Subject</label>
          <input type="text" id = "subject" class="form-control">
          <label class = "form-item"for = "message">Message</label>
          <textarea name="" id = "message" class = "form-control" id=""  rows="8"></textarea>
          <input class = "btn" type="submit" value="Send Message">
        </form>
      </div>

    </div>

    <!-- end contact -->

<!-- footer -->

<?php 

include "./footer.php";?>

<!--end footer -->

          </div>

  </body>
  <!-- JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/home.js"></script>
 
</html>
