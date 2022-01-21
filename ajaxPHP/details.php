<?php
if ($_POST['tab'] == "Plan")
echo "<small onclick = 'c()'> &#x274C;</small><h3>Plan</h3><div class='info-container'>
        <ul>
            <li><p><strong>Role : </strong>Customer</p></li>
            <li><p><strong>Validity : </strong>28days</p></li>
            <li><p><strong>Category : </strong>Free</p></li>
            <li><p><strong>Benefit : </strong>Normal Access</p></li>
        </ul>
    </div>";
else if($_POST['tab'] == "Security")
echo '<small onclick = "c()"> &#x274C;</small><h3>Security</h3> <div class="sec-container">
<form class="form" id = "sec-form" action="" enctype="multipart/form-data" method="post">
    <img src="../images/profile.png" class = "image-fluid" alt="" srcset="">
    <label style = "cursor: pointer; text-align: center;"for="profile_pic"  > &#9998; Edit Pic</label>
    <input type="file" style=" display :none" id="profile_pic" name="profile_pic" id="">
    
    <label for="username">Username</label>
    <input  class = "form-control" type="text" name="username" id="username" value = "Yashwant Sahu">
    
    <label for="email">Email</label>
    <input  class = "form-control" type="email" name="email" id="email"value = "yashwantsahu3002@gmail.com">
    
    <label for="password">Password</label>
        <input type="password" class = "form-control" value = "yashwant" name="password" id="password" />

   
    <button type="submit"  class= "btn btn-danger">Edit</button>
</form>
</div>';
else if($_POST['tab'] == "Wallet")
echo '<small onclick = "c()"> &#x274C;</small><h3>Wallet</h3><div class="wall-container">
<p><strong>Current Balance : </strong>Rs.0.00</p>
<button onclick="addmore()" id = "addmore" class = "btn btn-danger" >Add More</button>
<form class = "form" id= "addmore-form" action="" method="post">
    <label for="ammount" style="margin: 2% 0% 0% 0%;">Ammount</label>
    <input id="ammount" class = "form-control" type="number" name="" placeholder = "Enter the amount" id="">     
    <button onclick="" class = "btn btn-danger" >Add</button>
</form>
</div>';
else if($_POST['tab'] == "Order")
echo '<small onclick = c()> &#x274C;</small><h3>Order</h3>   <div class="order-container">
<div class="o-item">
    <div>
    <img src="../images/product/p1.jpg" class="img-fluid" alt="" srcset=""></div>

    <div><p><h6>Protien</h6><span>Quentity : 1</span><br><span>Price : 330rs</span></p></div>
    
    <div>Fri,12/12/2021</div>
</div>
<div class="o-item">
    <div>
    <img src="../images/product/p1.jpg" class="img-fluid" alt="" srcset=""></div>

    <div><p><h6>Protien</h6><span>Quentity : 1</span><br><span>Price : 330rs</span></p></div>
    
    <div>Fri,12/12/2021</div>
</div>
<div class="o-item">
    <div>
    <img src="../images/product/p1.jpg" class="img-fluid" alt="" srcset=""></div>

    <div><p><h6>Protien</h6><span>Quentity : 1</span><br><span>Price : 330rs</span></p></div>
    
    <div>Fri,12/12/2021</div>
</div>
</div>';
else if($_POST['tab'] == "Address")
echo '<small onclick = "c()"> &#x274C;</small><h3>Address</h3><div class="address-container">
<p><strong >Primary Address : </strong> <input type="text" name="" class="form-control" value = "Dargah Bazar Ajmer" id=""></p>
<button onclick="addmore()" id = "addmore" class = "btn btn-danger" >Add More Address</button>
<form class = "form" id= "addmore-form" action="" method="post">
    <label for="ammount" style="margin: 2% 0% 0% 0%;">Address</label>
    <input id="ammount" class = "form-control" type="text" name="" placeholder = "Enter the address" id="">     
    <button onclick="" class = "btn btn-danger" > &#10010;</button>
</form>
</div>';
?>