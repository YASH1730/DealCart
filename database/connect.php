<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dealcart";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// sql to create cart table 
$creatCoustomer = "CREATE TABLE cart (
  pname VARCHAR(30) NOT NULL,
  customer VARCHAR(30) NOT NULL,
  price VARCHAR(50),
  pimg VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

// sql to create coustomer table 
$creatCoustomer = "CREATE TABLE coustomer (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(50),
    addres VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    // if ($conn->query($creatCoustomer) === TRUE) 
    //   echo "Tablecreated successfully";
    // else 
    //   echo "Error creating table: " . $conn->error;
    
// $conn->close();

?>