<?php include_once("CDN.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

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

<div class="reg-container mb-5">
  
  <!-- side image -->
  <div class="reg-photo"><img class = "img-fluid" src="../images/log_reg/reg.svg" alt=""></div>

  <!-- middle line  -->
  <div class = "vr"></div>
  

  <!-- main form -->
  <div class="form p-1"  >

      <form id = "reg-form" method="post">
        <span
          class="heading animate__animated animate__fadeInTop">Register </span>
        <div class="form-row">
            <div class="col form-group">
              <label>First Name </label>   
                <input type="text" class="form-control"placeholder=" Firstname" id="reg-firstname">
            </div> <!-- form-group end.// -->
            <div class="col form-group">
              <label>Last Name</label>
                <input type="text" class="form-control" placeholder=" Lastname" id="reg-lastname" >
            </div> <!-- form-group end.// -->
      </div> <!-- form-row end.// -->
      
      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" name="reg-email" placeholder="Email"  pattern='/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i' title="Enter the valid email address !!!" id="reg-email">
        <small class="form-text" id = "alert">We'll never share your email with anyone else.</small>
        <small id = "alert" style = "display:none;"></small>
      </div>
      
      <!-- "^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" -->
      <div class="form-group">
        <label >Password</label>
        <input id = "password" type="password" placeholder = "Password" pattern = "^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" title = "Password lenght must be 8 with atleast one special char." class = "form-control " id="reg-password" >
        <p class="ml-2 float-right"><input type="checkbox" onclick="show()"  ><span > &nbsp; Show Password</span></p>      
      </div>
      <div class="form-group" id = "repass-block">
        <label>Re-Password</label>
            <input type="password" placeholder = "Re-Password" class = "form-control " id="reg-repassword" >
      </div> 
          
      
      <div class="form-group">
            <label>Address</label>
            <textarea placeholder = "Address" class = "form-control " name="reg-address" id="reg-address"></textarea> 
            <a  href="http://localhost/College%20Project/php/log.php"><small style = "color:#eb5d1e; class="form-text float-right text-muted">Already a customer?</small></a>
          </div>
      
      <input type="submit" class = "btn regbtn"  name = "register" value = "Register">
    </form>
  </div>

</div>

<!-- end form -->
<!-- footer -->
<?php
include "./footer.php" ?>

</body>
<script src="../js/register-login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/notify.js"></script>
<script src="../js/notify.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>