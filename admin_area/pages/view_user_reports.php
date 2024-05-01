<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Report</title>

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
  .main-cont{
    display: inline;
  text-align:center;
  justify-content:center;
  }

  .dash-card{
    height:350px;
    padding:10px;
    width:400px;
    display: inline-block;
    margin:40px 30px;
    border-radius:20px;
  
    box-shadow:0 0 30px rgba(0 , 0 , 0, 0.2);
    
  }
 

.img{
  width:200px;
  height:200px;
  display:flex;
  margin:20px auto;
  margin-bottom:50px;

}
b{
  font-size:25px;
}

.script-container{
  margin-left:450px;
 }
 

  .btn1{
  margin:5px;
 background-color:#33d6ff;
  border:none;
  border-radius:10px;
  padding:5px;
  width:100px;

  font-size:20px;

 }
 .script-text{
  color:red;
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
      <img src="./../../images/logo/logo.png" alt="" class="logo">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="./../dashbord.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./../admin_registration.php">Register</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="./about_us.php">About us</a>
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
        </li>-->
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
    <a class="nav-link" href="#">Welcome Guest</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="./user_area/user_login.php">Login</a>
</li>
  </ul>
</nav>

<div class="row ">

<div class="main-cont">

<a href=".\report-product.php">
  <div class="dash-card ">
  <img src="..\dashboard-img\user_product_report.png" class="img">
    <label> <b>Product Report</b></label>
</a>
</div>


<a href=".\report_user_register.php">
  <div class="dash-card">
  <img src="..\dashboard-img\user_register_report.png" class="img">
    <label> <b>User Registration Report</b></label>
  </div>
  </a>



  <a href=".\report_order.php">
  <div class="dash-card ">
  <img src="..\dashboard-img\order_report.png" class="img">
    <label> <b>User Order Report</b></label>

</div>
</a>



  <a href=".\report_user_feedback.php">
  <div class="dash-card">
  <img src="..\dashboard-img\user_feedback_report.png" class="img">
    <label> <b>User Feedback Report</b></label>
  </div>
  </a>




<a href=".\report_payment.php">
  <div class="dash-card ">
  <img src="..\dashboard-img\payment_report.png" class="img">
    <label> <b>User Payment Report</b></label>
</a>
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
      
