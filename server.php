<?php
include "./database/connect.php";
session_start();

// to check the user is looged in or not 

function checkUserLog($email,$conn)
{
   
  $inserting_session = "INSERT INTO log_Sessions (email) VALUES ('$email')";

  $check_session = "SELECT * FROM log_Sessions WHERE email = '$email'";

  $result  = $conn->query($check_session);

  if($result->num_rows != 0)
      return FALSE;
  else{
    if($conn->query($inserting_session))
      return TRUE;
    else
      return FALSE;

  } 
    
}

// get logout

function logout($email,$conn)
{
   
  $deleting_session = "DELETE FROM log_sessions WHERE email = '$email'";

  if($conn->query($deleting_session) === TRUE)
  {
    return TRUE;
  }
  else{
      return FALSE;
  } 

}




//encrypt decrypt

function encryptPass($password) {
    $sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
    $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
    $method = 'aes-256-cbc';

    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

    $encrypted = base64_encode(openssl_encrypt($password, $method, $sSalt, OPENSSL_RAW_DATA, $iv));
    return $encrypted;
}

function decryptPass($password) {
    $sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
    $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
    $method = 'aes-256-cbc';

    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

    $decrypted = openssl_decrypt(base64_decode($password), $method, $sSalt, OPENSSL_RAW_DATA, $iv);
    return $decrypted;
}

// encrypt decrypt end here


// register function

if($_POST['request'] == "register"){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = encryptPass($_POST['pass']);
    $address = $_POST['address'];
    
    // quer for checking the email is alredy registered or not
        $checkEmailRegisterd = "SELECT email FROM coustomer WHERE email ='$email';";
        $result  = $conn->query($checkEmailRegisterd); 

             if($result->num_rows == 0)
                {
                    // query to insert the data 
                    $insertcoustomerData = "INSERT INTO coustomer (`firstname`,`lastname`, 
                    `email`, `pass`, `addres`) VALUES ('$fname','$lname', '$email', '$pass', '$address');";
                        
                        if ($conn->query($insertcoustomerData) === TRUE) 
                        {
                          echo "http://localhost/College%20Project/php/home.php";
                          exit;
                        }
                        else 
                        echo "Error inserting data: " . $conn->error;
                        
                        $conn->close();
                }
            else{
                        echo "Email Is Already Registerd !!!";
                        $conn->close();
                }

        }
// end register function       
// Longin function
else if ($_POST['request'] == "login")
        {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            // echo $pass.$email;
            
            // quer for checking the email is alredy registered or not

            $checkEmailRegisterd = "SELECT * FROM coustomer WHERE email ='$email';";
           
            $result  = $conn->query($checkEmailRegisterd);
            
            if($result->num_rows != 0)
            {
              $row = $result->fetch_assoc();
              
              $dpass =  decryptPass($row['pass']);
              
              if($dpass == $pass)
              {

                if(checkUserLog($email,$conn) === TRUE)
                {
               echo "http://localhost/College%20Project/php/home.php";
                  exit;
                }
                else
                echo "Already Log-In";
              
              }
              else 
                  echo "sorry worng pass".$dpass;
            }
            else
                echo "Invalid Credentials !!!";    
            $conn->close();
        }
               
        // end  Longin function
        
        //show category

else if ($_POST['request']== 'catname')
        {
            $category = $_POST['catname'];
            $limit = $_POST['limit'];
            // echo $limit;
            
            $getTheproduct = "SELECT * FROM `items` WHERE CATEGORY = '$category' LIMIT ".$limit." ;";
            $result = $conn->query($getTheproduct);

            if($result->num_rows != 0)
            {
                while($row = $result->fetch_assoc()){

                    $pimg = $row['image'];
                    $pname = $row['pname'];
                    $pprice = $row['price'];
                    $min = explode(",",$pprice);
                    $min = min($min);

                    echo  '<div class="f-container page-wrapper" >
                    <div class="page-inner">
                      <div class="row">
                          <div class="el-wrapper">
                            <div class="box-up">
                              <img class="img " style = "width:200px; height : 200px;" src="../images/product/'.$pimg.'" alt="">
                              <div class="img-info">
                                <div class="info-inner">
                                  <span class="p-name" id = "pname">'.$pname.'</span>
                                </div>
                                <div class="a-size">Offers Prices : <span class="size">'.$pprice.'</span></div>
                                <div id = "limit" >'.$limit.'</div>
                              </div>
                            </div>
                            
                            <div class="box-down">
                              <div class="h-bg">
                                <div class="h-bg-inner"></div>
                              </div>
                              
                              <a class="cart" onclick = "addToCart()">
                                <span style = "color:transparent" >'.$pname.'&'.$pimg.'</span>
                                <span class="price">Rs.'.$min.'</span>
                                <span class="add-to-cart">
                                  <span class="txt">Add in cart</span>
                                </span>
                              </a>
                            </div>
                          </div>
            
                        </div>
                        
                </div>
            
                </div>';
                }

            }
        }


        //add to cart 
else if($_POST["request"] == "addtocart")
        {
          $pname  = $_POST['pname'];
          $pprice  = $_POST['price'];
          $cemail  = $_POST['coustomer'];
          $pimg  = $_POST['pimg'];
          $qty  = $_POST['qty'];
          $category  = $_POST['category'];
      
          $addToCart = "INSERT INTO `cart` (`pname`, `coustomer`, `price`, `pimg`, `qty`, `category`) VALUES ('$pname', '$cemail', '$pprice','$pimg','$qty','$category');";
          
          // echo $addToCart;

          // echo $pname.$pprice.$cemail;
          if($conn->query($addToCart) === TRUE)
            echo "Data Successfumylly Added";
          else
            echo "Sorry !!!";
          $conn->close();
        }

else if($_POST["request"] == "cartDetails")
        {

          $email = $_POST['email'];
          $getAllCartItem = "SELECT * FROM cart where coustomer = '$email';";
          $result = $conn->query($getAllCartItem);

          if($result->num_rows != 0)
          {
            while($row = $result->fetch_assoc())
              {
           
                echo '<div class="product">
                  <div class="product-image">
                    <img src="../images/product/'.$row['pimg'].'">
                  </div>
                  <div class="product-details">
                    <div class="product-title">'.$row['pname'].'</div>
                    <div style = "color : transparent;">'.$row['coustomer'].'</div>
                    
                  </div>
                  <div class="product-price"><p class = "price">'.$row['price'].'</p></div>
                  <div class="product-quantity">
                    <input type="number" value="'.$row['qty'].'" min="1">
                  </div>
                  <div class="product-removal">
                    <button class="remove-product">
                      Remove
                    </button>
                  </div>
                  <div class="product-line-price">'.($row['price']*$row['qty']).'</div>
                </div>';
              }
          }
          else 
            echo "<center class='product' ><h1>No product added yet !!!</h1></center>";
          


        }

else if($_POST['request'] == "removeItem")
        { 
          $pname  = $_POST['pname'];
          $coustomer = $_POST['cname'];
          $deleteItem  = "DELETE FROM `cart` WHERE pname = '$pname'  AND coustomer = '$coustomer' ;";
         

          if($conn->query($deleteItem) === TRUE)
            echo "Prodouct has been removed";
          else
            echo "Sorry Server Error";
        }


else if ($_POST['request'] == "logout")
{
  $email = $_POST['email'];

          if(logout($email,$conn) === TRUE)
          {
            echo "http://localhost/College%20Project/php/home.php";
          }
          else
           echo "Already Log Out";
          
           $conn->close();
          }
else if ($_POST['request'] == "checkout")
{
  $_SESSION['total'] = $_POST['total'];
  $_SESSION['email'] = $_POST['email'];
  echo "http://localhost/College%20Project/php/pay.php";

}
else if ($_POST['request'] == "order")
{
     
  $email = $_POST['email'];
  
          $getAllCartItem = "SELECT * FROM cart where coustomer = '$email';";
          $getGST = "SELECT * FROM product_category ;";
          $deleteAllCartItem = "DELETE FROM cart where coustomer = '$email';";
          $getOrderId = "SELECT orderId FROM orders
          ORDER BY orderId DESC
          LIMIT 1;";

          $orderData = $conn->query($getOrderId);
          $orderID = '';

          if($orderData->num_rows != 0)
          {
              $row = $orderData->fetch_assoc();
              $arr =  intval(explode('-',$row['orderId'])[1]) + 1;
              $orderID = "OID-$arr";
          }
          else{
            $orderID = 'OID-1';
          }

          // echo $orderID;


          $result = $conn->query($getAllCartItem);
          
          
          if($result->num_rows != 0)
          {
            while($row = $result->fetch_assoc())
            {   
                $GST = $conn->query($getGST);
                $pname = $row['pname'];
                $customer = $row['coustomer'];
                $price = $row['price'];
                $pimg = $row['pimg'];
                $qty = $row['qty'];
                $category = $row['category'];
                $afterGST  = $row['price'];

                while($GSTData = $GST->fetch_assoc())
                {
                  if($category === $GSTData['CATEGORY'])
                  {
                    $price -= ($price/100)*$GSTData['GST'];
                    $perGST = $GSTData['GST'];
                    break;
                  }
                }

                $insertOrderData = "INSERT INTO orders (`orderId`,`pname`,`customer`, `qty`, `price`, `afterGST`, `pimg`, `category` , `GST`) VALUES ('$orderID','$pname', '$customer','$qty', '$price', '$afterGST' ,'$pimg', '$category', '$perGST');";

                
                if($conn->query($insertOrderData) !== TRUE)
                  echo "Sorry !!!";
                
              }
          }

          $conn->query($deleteAllCartItem);

          $getAllOrderItem = "SELECT * FROM orders where orderId = '$orderID';";

          $result = $conn->query($getAllOrderItem);

          $data = array();
                  
          if($result->num_rows != 0)
          {
            while($row = $result->fetch_assoc())
              {   
                  array_push($data,$row);
                 
              }
              echo json_encode($data);
          }


        
}

else if ($_POST['request'] == "getOrder")
{
  $email = $_POST['email'];
  $getAllOrderItem = "SELECT * FROM orders where customer = '$email';";

  
  $result = $conn->query($getAllOrderItem);
  $data = array();
          
  if($result->num_rows != 0)
  {
    while($row = $result->fetch_assoc())
      {   
        array_push($data,$row);

      }
      echo json_encode($data);

  }
  else
  echo '<small onclick = c()> &#x274C;</small><h3>Order</h3>   <div class="order-container">
    No Orders Yet
  </div>';



}

else if ($_POST['request'] == "dashboardOrder")
{
  $getAllOrderItem = "SELECT * FROM orders ORDER BY orderId DESC ;";
  
  $result = $conn->query($getAllOrderItem);

  $data = array();
          
  if($result->num_rows != 0)
  {
    while($row = $result->fetch_assoc())

    {
        array_push($data,$row);
    }
    
    echo json_encode($data);
  }

}

else if ($_POST['request'] == "searchOrder")
{
  $search = $_POST['searchVal'];

  $getAllOrderItem = "SELECT * FROM orders where orderId = '$search';";

  $result = $conn->query($getAllOrderItem);

  $data = array();
          
  if($result->num_rows != 0)
  {
    while($row = $result->fetch_assoc())

    {
        array_push($data,$row);
    }
    
    echo json_encode($data);
  }

}

else if ($_POST['request'] == "productList")
{
  if(isset($_POST['searchVal']))
  {

    $search = $_POST['searchVal'];

    $getAllOrderItem = "SELECT * FROM items where pname LIKE  '%$search%';";
    
    $result = $conn->query($getAllOrderItem);
    // echo "$getAllOrderItem";
  $data = array();
          
  if($result->num_rows != 0)
  {
    while($row = $result->fetch_assoc())
    
    {
      array_push($data,$row);
    }
    
    echo json_encode($data);
  }

  }
  else{

    $getAllOrderItem = "SELECT * FROM items ;";
    
    $result = $conn->query($getAllOrderItem);
    
  $data = array();
          
  if($result->num_rows != 0)
  {
    while($row = $result->fetch_assoc())
    
    {
      array_push($data,$row);
    }
    
    echo json_encode($data);
  }
}
}

// last else
else{
            echo "Invalid Request !!!";
            // $conn->close();
        } 


    
?>