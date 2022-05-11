<?php include_once("CDN.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
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
            include "../css/components/dashboard.css";
            include "../css/730px.css";
            include "../css/514px.css"; ?>
    </style>
  </head>
  <body>

  

  <!-- heading -->
  <h4 class = 'heading'>Dashboard Overview</h4>

  <!-- top three card container -->

  <div class = 'container topCardContainer' >
        
        <div class ='items' id = 'card1'>
            <svg stroke="currentColor" fill="white" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M16 5l-8-4-8 4 8 4 8-4zM8 2.328l5.345 2.672-5.345 2.672-5.345-2.672 5.345-2.672zM14.398 7.199l1.602 0.801-8 4-8-4 1.602-0.801 6.398 3.199zM14.398 10.199l1.602 0.801-8 4-8-4 1.602-0.801 6.398 3.199z"></path></svg>
            <span>Today Order</span>
            <strong id = 'totalPrice' ></strong>
        </div>
        
        <div class ='items' id = 'card2'>
        <svg stroke="white" fill="white" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            <span>This Month Seals</span>
            <strong id = 'totalPrice2'></strong>
        </div>
        
        <div class ='items' id = 'card3'>
        <svg stroke="white" fill="white" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M14.5 2h-13c-0.825 0-1.5 0.675-1.5 1.5v9c0 0.825 0.675 1.5 1.5 1.5h13c0.825 0 1.5-0.675 1.5-1.5v-9c0-0.825-0.675-1.5-1.5-1.5zM1.5 3h13c0.271 0 0.5 0.229 0.5 0.5v1.5h-14v-1.5c0-0.271 0.229-0.5 0.5-0.5zM14.5 13h-13c-0.271 0-0.5-0.229-0.5-0.5v-4.5h14v4.5c0 0.271-0.229 0.5-0.5 0.5zM2 10h1v2h-1zM4 10h1v2h-1zM6 10h1v2h-1z"></path></svg>
            <span>Total Seals</span>
            <strong id = 'totalPrice3'></strong>
        </div>
  </div>

  <!-- second card section  -->

  <div class="containeer secCardContainer mt-5">

      <div class="secitems">
          <div class = 'icon n1'>
            <svg stroke="rgb(247 85 24)" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
          </div>
          <div class = 'textHolder' >
              <span>Total Orders</span>
              <strong id = 'totalOrder'></strong>
          </div>      
      </div>
      

      <div class="secitems">
          <div class = 'icon n2'>
          <svg stroke="rgb(28 98 157)" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
          </div>
          <div class = 'textHolder' >
              <span>Total Price</span>
              <strong id = 'totalPrice3'></strong>
          </div>      
      </div>

      <div class="secitems">
          <div class = 'icon n3'>
          <svg stroke="rgb(25 131 57)" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
          </div>
          <div class = 'textHolder' >
              <span>Shipped</span>
              <strong>172</strong>
          </div>      
      </div>

      <div class="secitems">
          <div class = 'icon n4'>
          <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class = 'textHolder' >
              <span>Completed</span>
              <strong>180</strong>
          </div>      
      </div>

  </div>

  <!-- recent order table -->

  <div class="container mt-5 mb-5 tableContainer">

        <h5>Orders</h5>

      <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">O-Id</th>
    <th scope="col">Product Name</th>
    <th scope="col">Quentity</th>
    <th scope="col">Price </th>
    <th scope="col">GST</th>
    <th scope="col">Total</th>
    <th scope="col">Order Date</th>
            </tr>
        </thead>
        <tbody id = 'table-body'>
            
        </tbody>
    </table>
  </div>

</body>
 <!-- JavaScript -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/dashboard.js"></script>
</html>