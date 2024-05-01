




<?php


$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());


/*
// Get the ID of the inserted row
$lastInsertedID = mysqli_insert_id($con);

// Use the ID in further operations
$query = "SELECT id FROM user_order ";

$result = mysqli_query($con, $query); 

*/

// Connect to the database


// Insert a new record
/*mysqli_query($con, "SELECT id FROM user_order ");

// Get the last inserted record ID
$lastRecordId = mysqli_insert_id($con);

// Pass the value to a button


// Close the database connection
mysqli_close($con);*/



// Connect to your database

/*
// Insert your data into the table
$query = "INSERT INTO user_order";
mysqli_query($con, $query);

// Get the last inserted ID
$lastInsertedID = mysqli_insert_id($con);

// Fetch the value using the last inserted ID
$query = "SELECT * FROM user_order WHERE id = $lastInsertedID";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

// Print the fetched value
echo $row['id'];

// Close the database connection
mysqli_close($con);

*/
// Get the maximum ID from the table
$query = "SELECT MAX(id) AS max_id FROM user_payment";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Close the database connection
mysqli_close($con);

// Pass the value to the button on the next page



?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>make payment</title>

    <!---bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">

<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!--css file-->
<link rel="stylesheet" href="style.css">
<style>
 
/*Start third part css*/

.logo{
    height:70px;
    width:80px;
    border-radius:20px;
  }

.card{
    box-shadow: 0 0 20px rgba(0,0,0,0.2);
    height:400px;
    width:600px;
    display:block;
    margin-left:470px ;
    margin-top:60px;
    margin-bottom:50px;
   


}
.button{
    margin-left:150px;
    margin-top:50px;
    padding:20px;
    border:none;
    border-radius:10px;
    width:300px;
    background-color:black;
    color:#ffff;
    font-size:20px;



}
a {
    decoration:none;
    color:white;
}
p{
 margin-top:100px;
 color:red;
 margin-left:140px;
 

}
 

</style>
</head>
<body>

<!--navbar-->
<div class="container-fluid p-0">


    <!-- first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">

 

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <img src="..\images\logo\logo.png" alt="" class="logo">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../homepage.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="./about_us.php">About us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href=".\contact_us.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=".\faq.php">FAQ</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
       <!--<li class="nav-item">
          <a class="nav-link" href="#">Total Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>-->
      </ul>
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>


<!--Second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
  <li class="nav-item">
    <a class="nav-link" href="#"></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="./user_area/user_login.php"></a>
</li>
  </ul>
</nav>




<div class="row" >

<div class="col-md-4 mb-2"> 
  <div class="card pt-4 card ">
 

 <p><b> Click Here  👇 ..........!   And View Your Shopping Bill</b></p>
  <!--<button class="button" >
 <?php //echo "<a href=\"..\user_area\payment.php?id=[id]\">Pay Now</a>";?>

</button>-->
<button class="button" >
 <?php  
echo "<a href='bill.php?id=" . $maxId . "'>Get Bill</a>";?>
</button>
</div>
 </div>












</div>




<!---last child--->
<div class="bg-info p-3 text-center">
   Developed by:-<br>
Gaikwad Rutuja ,
Nimse Nikita 
</div>
</div>
<!--bootstarap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
 </script>
 </body>
</html>
