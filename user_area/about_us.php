<!--connect file-->



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
  .logo{
    height:70px;
    width:80px;
    border-radius:20px;
  }


.logo{
    height:70px;
    width:80px;
    border-radius:20px;
  }
  .first_card{
    height:auto;
    padding:20px;
    width:1200px;
 box-shadow:0 0 10px rgba(0 , 0 , 0, 0.2);
  border-radius:5px;
  margin-left:200px;
  border:none;
  margin-bottom:50px;
  }
  p{
    padding:20px;
    font-size:25px;
  }
  h1{
 margin-left:700px;
 margin-bottom:50px;
  }
  .second_card{
   display:flex;
   box-shadow:0 0 40px rgba(0 , 0 , 0, 0.2);
   margin-left:400px;
   margin-bottom:30px;
   width:700px;

    
   
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
          <a class="nav-link" href=".\contact_us.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=".\faq.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=".\feedback.php">Feedback</a>
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
<h3 class="text-center">Ladies Shope</h3>
<p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>


<!--fourth child--->
<div class="row" >
 
<h1>About </h1><br>
   <div class="first_card"> 
   
   <p>It is for these reasons that 90% of our clients from all over the world keep coming back! Just ask them!

<b>NR Ladies Shope</b>is a unified communications platform that empowers business owners and 
promotes business growth through services that strengthen brand identity, and sustainably promote online presence to increase engagement. We offer services to help small 
business enterprises from branding, website development, to digital marketing—and
 everything else digital in between.</p>


 </div>

 </div>

<div class="row " >
 <div class="second_card  ">
  <img src="..\images\about\img1.jpg">
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