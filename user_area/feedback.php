<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>

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
 .third-part{
    display:flex;
    width:100%;
    height:auto;
    padding:10px 10px;
    margin-bottom:100px;
   
    
  }

.contact_data2  {
    background: #fff;
    border-radius: 02px;
    
    width: 600px;
    height:600px;
    margin-left: 30%;
    
    border-radius:10px 10px;
    padding:10px 10px;
    margin-top: 10px;
    
    }
    /*second card form css*/
  .contact_data2 form {
   padding: 10px;
   padding-left:40px;
   border: 03px solid #232526;
   border-radius: 50px 0px;

 }
 
 .contact_data2 form input,textarea {
   width: 90%;
   margin: 05px 0 0 10px;
   padding: 07px 10px;
   border: 1px solid #232526;
   font-size: 1rem;
   border-radius: 05px;


 }
 
  .contact_data2 h2 {
   margin: 1.5rem;
   border-bottom: 0.2rem #232526;
   font-size: 40px;
   margin-left:20% ;
 }
 
.contact_data2 label {
   display: block;
   padding-top: 15px;
   padding-left: 10px;
 }
 .btn-style{
    margin-left:40%;

 }

 /*
.contact_data2 button {
   margin: 20px 10px;
   border: 1px solid #fff;
   padding: 10px 20px;
   background: #02ccfe;
   color:#000000;
   font-size: 1rem;
   border-radius: 23px;
   cursor: pointer;
   transition: all 0.3s;
   font-family: 'Montserrat', sans-serif;
   justify-content: center;
   text-align: center;
   margin-left:30%;
 }
  end third card css*/

 

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


<!---third child--->
<div class="bg-light">
<h3 class="text-center">Ladies Shope</h3>
<p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>


<!--fourth child--->
<!--contact part start-->


    <!--start third part-->
    <div class="third-part">
      <div class="contact_data2">
        <h2>Connect With Us</h2>
        <form action="" method="post">
          <label for="name">Name</label>
          <input type="text" name="name" >
          <label for="email ">Email</label>
          <input type="email" name="email" >
          <label for="subject">Subject</label>
          <input type="text" name="subject" />
          <label for="message">Message</label>
          <textarea name="message" id="" cols="30" rows="05" ></textarea>

          <button class="button bg-info py-2 px-3  mt-4  mb-4 ms-5 border-0 rounded btn-style" type="submit"  name="submit">Send Feedback</button>
         
         
          <!--<a href=".\feedback-view.php">
          <button class="button bg-secondary text-white py-2 px-3 mt-4 mb-4 border-0 rounded">View Feedback</button>
        </a>-->


       
        </form>
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



<?php

include("dbcon.php");

if (isset($_POST['submit'])) {
	
	$name =  $_POST['name'];
  $email =  $_POST['email'];
  $subject =  $_POST['subject'];
	$message =  $_POST['message'];
	
 
         
		$sql= "INSERT INTO  user_feedback(`name`,`email`, `subject`, `message`)VALUES ('$name','$email', '$subject','$message')";
		
         if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Feedback send Successfully ..👍");
                    window.location="feedback.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Feedback not send...!");
            window.location="feedback.php";
            </script>';
        }
}
?>