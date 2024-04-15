<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website Using php and My sql</title>

    <!---bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">

<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!--css file-->
<link rel="stylesheet" href="style.css">
<style>
   .btn-info:hover{
    background-color:grey;
    color: white;
    border-color:black;
    border-width: 1px; 
  }

  .logo{
    height:70px;
    width:80px;
    border-radius:20px;
  }
.product_card{
  height:500px;
  width:390px;

  border-radius: 10px 10px;
   box-shadow:0 0 10px rgba(0 , 0 , 0, 0.4);
  margin-left:17px;

}
.card_img{
  height:260px;
  width:350px;
  margin:20px;
  border-radius:5px;
  }
 #button{
  margin-left:150px;
 }
 #card_body{
  margin:10px;
 }

 .button{
  height:40px;
  width:100px;
  border:none;
  background-color:#00ccff;
  border-radius:10px;
  font-size:20px;
  margin-left:130px;
  margin-top:10px;
 color:white;
 text-align:center;
 justify-content:center;

}
a{
color:#ffff;
decoration:none;
}
</style>
</head>
<body>

<!--navbar-->
<div class="container-fluid p-0">


    <!-- first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
   data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
    aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <img src="..\images\logo\logo.png" alt="" class="logo">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../user_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./../user_area/about_us.php">About us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="./../user_area/contact_us.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./../user_area/faq.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./../user_area/feedback.php">Feedback</a>
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


<!---third child--->
<div class="bg-light">
<h3 class="text-center">Beauty Product</h3>
<p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>


<!--fourth child--->
<div class="row">

<div class="col-md-10">
  
 <!--products-->

<div class="row" >
<!--
<div class="col-md-4 mb-2">
<div class="product_card">  

  <img src="..\images\view_product\beauty_product\lipstick_1.jpg"  class="card_img" alt="...">

  <div class="card-body"id="card_body">
    <h5 class="card-title">Lakme Lipstick</h5>
    <p class="card-text">Lakme Cushion Matte Lipstick with a revolutionary soft matte  lips feel soft and comfortable.</p>
    <a href="..\buy_now\buy_beauty_product_1.php" class="btn btn-info" id="button">Buy Now</a>
   
  </div>
</div></div>


<div class="col-md-4 mb-2">
<div class="product_card">  

  <img src="..\images\view_product\beauty_product\powder_2.jpg"  class="card_img" alt="...">
  
  <div class="card-body"id="card_body">
    <h5 class="card-title">Lakme Powder</h5>
    <p class="card-text">Look picture perfect with the Lakmé Face It Compact. Use this dynamic compact by Lakme </p>
    <a href="..\buy_now\buy_beauty_product_2.php" class="btn btn-info" id="button">Buy Now</a>
   
  </div>
</div></div>

<div class="col-md-4 mb-2"> 
<div class="product_card"> 

  <img src="..\images\view_product\beauty_product\kajal_3.jpg"class="card_img"alt="...">
  
  <div class="card-body"id="card_body">
    <h5 class="card-title">Lakme Kajal</h5>
    <p class="card-text">Having a full and shaped eyebrow can easily add more definition
       to your facial structure.</p>
  
       <a href="..\buy_now\buy_beauty_product_3.php"class="btn btn-info" id="button">Buy Now</a>
  </div>
</div></div>

-->

<?php
$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM add_product WHERE product_category='Beauty-Product' ORDER BY id DESC ";
$query_run=mysqli_query($con,$sql);
$check_product=mysqli_num_rows($query_run)>0;

 if($check_product)
 {
 while($row=mysqli_fetch_array($query_run))
 {
  ?>

<div class="col-md-4 mb-2"> 
  <div class="product_card">
   
  <img src="../admin_area/product_images/<?php echo $row['product_img'];?>"  
   class="card-img-top card_img" alt="T-shirt Image">

  <div class="card-body" id="card_body">
    <h5 class="card-title text-center"><?php echo $row['product_name'];?></h5>
    <p class="card-text text-center"><?php echo $row['product_desc'];?></p>
    <p class="card-text text-center ">Price:₹<?php echo $row['product_price'];?></p>
    <button  class="button">
    <?php  echo "<a href=\"..\user_area\order.php?id=$row[id]\" >Buy Now";?>
  
 </button>
 </a>
    <!--<a href="..\user_area\order.php" class="btn btn-info" id="button">Buy Now</a>-->
    
    
  </div>
</div></div>


  <?php

 

}


 
 }
?>


</div></div>
<!--side nav-->
<div class="col-md-2 bg-secondary p-0">

<ul class="navbar-nav me-auto text-center">
  <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light " ><h4>Our Brands</h4>
  </a>
   </li>
    
 <?php
   //$select_brands="select * from `brands`";
   //$result_brands=mysqli_query( $con,$select_brands);
   //$row_data=mysqli_fetch_assoc($result_brands);
   //echo $row_data['brand_title'];
   //echo $row_data['brand_title'];
   //while($row_data=mysqli_fetch_assoc($result_brands)){
   // $brand_title=$row_data['brand_title'];
   // $brand_id=$row_data['brand_id'];
   // echo"<li class='nav-item'>
   // <a href='index.php?brand='$brand_id' class='nav-link text-light'><h6> $brand_title</h6>
  // </a>
   //</li>";

  // }
  
?>


<li class="nav-item" >
    <a href="..\view_more\t_shirt.php" class="nav-link text-light " ><h6>Adidas</h6>
  </a>
   </li>
   <li class="nav-item" >
    <a href="..\view_more\jewellery.php" class="nav-link text-light " ><h6>Bentex</h6>
  </a>
   </li>
   
   <li class="nav-item ">
    <a href="..\view_more\sandals.php " class="nav-link text-light " ><h6>Paragon</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href="..\view_more\beauty_product.php" class="nav-link text-light " ><h6>Lakme</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href="..\view_more\watch.php" class="nav-link text-light " ><h6>Titan</h6>
  </a>
   </li>
</ul>


<div class="row-md-2 bg-secondary p-0">
<ul class="navbar-nav me-auto text-center">
  <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light " ><h4>Our Category</h4>
  </a>
 </li>

 <?php
   //$select_category="select * from `categories`";
   //$result_category=mysqli_query( $con,$select_category);
   //$row_data=mysqli_fetch_assoc($result_category);
   //echo $row_data['category_title'];
   //echo $row_data['category_title'];
   //while($row_data=mysqli_fetch_assoc($result_category)){
   // $category_title=$row_data['category_title'];
    //$category_id=$row_data['category_id'];
   // echo"<li class='nav-item'>
     //<a href='index.php?category='$category_id' class='nav-link text-light'><h6> $category_title</h6>
   //</a>
    //</li>";

   //}
  
?>

<li class="nav-item ">
    <a href="..\view_more\t_shirt.php" class="nav-link text-light " ><h6>T-Shirt</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href="..\view_more\lehanga.php" class="nav-link text-light " ><h6>Lehanga</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href="..\view_more\jewellery.php" class="nav-link text-light " ><h6>Jewellery</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href="..\view_more\sandals.php" class="nav-link text-light " ><h6>Sandal</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href="..\view_more\beauty_product.php" class="nav-link text-light " ><h6>Beauty Product</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href="..\view_more\watch.php" class="nav-link text-light " ><h6>Watch</h6>
  </a>
   </li>
</ul>
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