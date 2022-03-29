<?php include_once("CDN.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Longin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    
    <style>
      <?php
            include "../css/global.css";
            include "../css/register.css";
            include "../css/730px.css";
            include "../css/514px.css"; ?>
    </style>
  </head>
  <body>

  <!-- nav bar -->

    <?php
include "./nav.php" ?>


<!-- main container -->

<div id = "afm" class = "position-absolute w-100">
</div>

<div class="reg-container">


  <!-- main form -->
  <div class="form p-5"  >

      <form id = "log-form" method="post">
        <span class="heading animate__animated animate__fadeInTop">Log In </span>
      
      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" id="log-email" placeholder="Email"  pattern='/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i' title="Enter the valid email address !!!" >
    
      </div>
    
      <div class="form-group">
          <label >Password</label>
        <input id = "password" type="password" placeholder = "Password"  class = "form-control " >
        <p><input type="checkbox" class = "float-left" onclick="show()"  ><span> &nbsp; Show Password</span></p>      
    </div>

    <div class = "text-center">
        <a  href="http://localhost/College%20Project/php/log.php"style = "color:#eb5d1e;">Forget Password?</a>
        <h6>OR</h6>
        <a  href="http://localhost/College%20Project/php/register.php" style = "color:#eb5d1e;  ">I do not have any account.</a>
    </div>  
    
    <input type="submit" class = "btn regbtn" value = "Log In">
    </form>
  </div>

  
  <!-- middle line  -->
  <div class = "vr"></div>
  
  <!-- side image -->
  <div class="reg-photo"><img class = "img-fluid" src="../images/log_reg/log.svg" alt=""></div>


</div>

<!-- end form -->
<!-- footer -->
<?php
include "./footer.php" ?>
</body>
<script src="../js/register-login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>