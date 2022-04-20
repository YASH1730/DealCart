<?php include_once("CDN.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admine Panel</title>
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
            include "../css/adminPanel.css";
            include "../css/730px.css";
            include "../css/514px.css"; ?>
    </style>
  </head>
  <body>

  <!-- top panel -->
  
  <div class = 'topContainer'>
      <h2>Admin Panel</h2>
  </div>
    
  <!-- end top panel -->

  <!-- main container  -->
  
  <div class = 'conatiner-fluid mainContainer '>
    <!-- side panel -->
    
    <div class = 'sideContainer'>
        
    
        <a href = '?page=dashboard' <?php if($_GET['page'] == "dashboard") echo 'class = "active"'; else  ?> ><h5>Dashboard</h5></a>
        <a href = '?page=products'><h5>Products</h5></a>
        <a href = '?page=orders'><h5>Orders</h5></a>
        <a href = '?page=staff'><h5>Staff</h5></a>
        <a href = '?page=settings'><h5>Settings</h5></a>
        <button class = 'btn btn-danger logoutBtn' >LogOut</button>
    </div>
    
    <!-- end side panel -->
    
    <!-- display Container -->
  
    <div class = 'container-fluid displayConatiner'>
        <?php
        
        $page = $_GET['page'];

        switch ($page) {
            case 'dashboard':
                include './components/dashboard.php';
                break;
            
            case 'products':
                include './components/products.php';
                break;
            
            case 'orders':
                include './components/orders.php';
                break;
            
            case 'staff':
                include './components/staff.php';
                break;

            case 'settings':
                include './components/settings.php';
                break;
            
            default:
                include './components/dashboard.php';
                break;
        }
        
        ?> 
    </div>
    
    <!-- ends display Container -->
  </div>
  
  <!-- main container ends -->

<!-- footer -->

<?php 

include "./footer.php";?>

<!--end footer -->


</body>

<!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/adminePanel.js"></script>
</html>