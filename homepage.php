

<?php

$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());


/* direct access code*/


/*
include("dbcon.php");
 
if(!isset($_SESSION['user_username'])){
  header("location:.\user_area\user_login.php");
}
*/

/* end direct access code */

?>


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
      <img src=".\images\logo\logo.png" alt="" class="logo">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="./user_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_area/about_us.php">About us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="./user_area/contact_us.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_area/faq.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_area/feedback.php">Feedback</a>
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
     
    </div>
  </div>
</nav>


<!--Second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
  <li class="nav-item">
    <a class="nav-link" href="#">Welcome Guest</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="./user_area/user_login.php">Login</a>
</li>
  </ul>
</nav>


<!---third child--->
<div class="bg-light">
<h3 class="text-center">Ladies Shope</h3>
<p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>


<!--fourth child--->
<div class="row">

<div class="col-md-10">
  
 <!--products-->

<div class="row" >

<div class="col-md-4 mb-2"> 
  <div class="card pt-4"> 
  <img src=".\images\homepage\t_shirt.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">T-Shirt</h5>
    <p class="card-text">
High quality T-shirts start with 100% high quality, pre-shrunk cotton. 
 </p>
    <a href=".\view_more\t_shirt.php" class="btn btn-info">View More</a>
  
  </div>
</div></div>

<div class="col-md-4 mb-2">
   <div class="card  pt-4"> 
  <img src=".\images\homepage\lehanga.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lehenga</h5>
    <p class="card-text">A Beautiful Girl's Lengha Choli is made with Taffeta Satin Silk fabric, Choli has a 
      fitted waist.</p>
    <a href=".\view_more\lehanga.php" class="btn btn-info">View More</a>
   
  </div>
</div></div>

<div class="col-md-4 mb-2"> 
  <div class="card  pt-4"> 
  <img src=".\images\homepage\jewellery.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jewellery</h5>
    <p class="card-text">Jewellery consists of decorative items rings, necklaces, earrings, pendants,bengals.</p>
    <a href=".\view_more\jewellery.php" class="btn btn-info">View More</a>
    
  </div>
</div></div>

<div class="col-md-4 mb-2"> 
  <div class="card  pt-4"> 
  <img src=".\images\homepage\sandals.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title"> Sandals</h5>
    <p class="card-text">Additionally, it can help prevent your feet from getting too sweaty.</p>
    <a href=".\view_more\sandals.php" class="btn btn-info">View More</a>
 
  </div>
</div></div>

<div class="col-md-4 mb-2">
   <div class="card  pt-4"> 
  <img src=".\images\homepage\beauty_product.jpg"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Beauty Product</h5>
    <p class="card-text">Beauty is commonly described as a feature of objects that makes these objects pleasurable.</p>
    <a href=".\view_more\beauty_product.php" class="btn btn-info">View More</a>
    
  </div>
</div></div>

<div class="col-md-4 mb-2"> 
  <div class="card  pt-4"> 
  <img src=".\images\homepage\watch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Watch</h5>
    <p class="card-text">A watch is a portable timepiece intended to be carried or worn by a person.</p>
    <a href=".\view_more\watch.php" class="btn btn-info ">View More</a>
    
  </div>
</div></div>

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
    <a href=".\view_more\t_shirt.php" class="nav-link text-light " ><h6>Adidas</h6>
  </a>
   </li>
   <li class="nav-item" >
    <a href=".\view_more\jewellery.php" class="nav-link text-light " ><h6>Bentex</h6>
  </a>
   </li>
   
   <li class="nav-item ">
    <a href=".\view_more\sandals.php " class="nav-link text-light " ><h6>Paragon</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href=".\view_more\beauty_product.php" class="nav-link text-light " ><h6>Lakme</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href=".\view_more\watch.php" class="nav-link text-light " ><h6>Titan</h6>
  </a>
   </li>
</ul>


<div class="row-md-2 bg-secondary p-0">
<ul class="navbar-nav me-auto text-center">
  <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light " ><h4>Categoty</h4>
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
    <a href=".\view_more\t_shirt.php" class="nav-link text-light " ><h6>T-Shirt</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href=".\view_more\lehanga.php" class="nav-link text-light " ><h6>Lehanga</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href=".\view_more\jewellery.php" class="nav-link text-light " ><h6>Jewellery</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href="\view_more\sandals.php " class="nav-link text-light " ><h6>Sandal</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href=".\view_more\beauty_product.php" class="nav-link text-light " ><h6>Beauty Product</h6>
  </a>
   </li>
   <li class="nav-item ">
    <a href=".\view_more\watch.php" class="nav-link text-light " ><h6>Watch</h6>
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