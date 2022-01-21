<?php
include "./database/connect.php";
?>
<?php

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
                    $insertCoustomerData = "INSERT INTO coustomer (`firstname`,`lastname`, 
                    `email`, `pass`, `addres`) VALUES ('$fname','$lname', '$email', '$pass', '$address');";
                        
                        if ($conn->query($insertCoustomerData) === TRUE) 
                        echo "http://localhost/College%20Project/php/home.php";
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
                            echo "http://localhost/College%20Project/php/home.php";
                        else 
                            echo "sorry worng pass".$dpass;
                }
            else{
                        echo "Invalid Credentials !!!";
                }


            
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

                    $pimg = $row['IMAGES'];
                    $pname = $row['pname'];
                    $pprice = $row['PRICE'];
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
          $cemail  = $_POST['customer'];
          $pimg  = $_POST['pimg'];
          $qty  = $_POST['qty'];

          $addToCart = "INSERT INTO `cart` (`pname`, `customer`, `price`, `pimg`, `qty`) VALUES ('$pname', '$cemail', '$pprice','$pimg','$qty');";
          
          // echo $pname.$pprice.$cemail;
          if($conn->query($addToCart) === TRUE)
            echo "Data Successfully Added";
          else
            echo "Sorry !!!";
          // $conn->close();
        }

else if($_POST["request"] == "cartDetails")
        {

          $getAllCartItem = "SELECT * FROM `cart`;";
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
                    <div style = "color : transparent;">'.$row['customer'].'</div>
                    <p class="product-description">Who doesnt like lamb and rice? Weve all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now its your dogs turn!</p>
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
                  <div class="product-line-price">'.$row['price'].'</div>
                </div>';
              }
          }
          


        }

        else if($_POST['request'] == "removeItem")
        { 
          $pname  = $_POST['pname'];
          $customer = $_POST['cname'];
          $deleteItem  = "DELETE FROM `cart` WHERE pname = '$pname'  AND customer = '$customer' ;";
         

          if($conn->query($deleteItem) === TRUE)
            echo "Prodouct has been removed";
          else
            echo "Sorry Server Error";
        }


        else{
            echo "Invalid Request !!!";
            $conn->close();
        }
   
   
    
?>
