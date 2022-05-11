
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
            include "../css/components/product.css";
            include "../css/730px.css";
            include "../css/514px.css"; ?>
    </style>
  </head>
  <body>


<h4 class = 'heading'>Order</h4>
<div class="container searchContainer ">
<div class="input-group">
  <span class="input-group-text">Order ID</span>
  <input type="search"  aria-label="Search Order" class="form-control" id = 'search-bar'>
</div>
<button class = 'btn btn-primary' onClick = "getSearchVal()" >Search</button>
</div>




  <div class="container mt-5 mb-5 tableContainer">

<h5>Order List</h5>

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
  <script src="../js/order.js"></script>
 </html>