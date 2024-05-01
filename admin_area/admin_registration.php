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
</head>
<link rel="stylesheet" href="style.css">
</head>
<style>
   .logo{
    height:70px;
    width:80px;
    border-radius:20px;
  }
  </style>
<body>

<!--navbar-->
<div class="container-fluid p-0">


    <!-- first child-->
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
    <a class="nav-link" href="#"></a>
</li>
  </ul>
</nav>


<div class="container-fluid my-3">
    <h2 class="text-center">Admin Registration </h2>
    <div class="class-row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data" onsubmit="return.validate()">

                  <!--user name field-->
                <div class="form-outline mb-4" >
                    <label for="admin_name" class="form-label">Admin name</label>
                    <input type="text"id="admin_name" class="form-control" 
                    placeholder="enter your user name" autocomplete="off" required="required"
                    name="admin_name">
                </div>

                      <!--user email field-->
                <div class="form-outline mb-4">
                    <label for="admin_email" class="form-label">Email</label>
                    <input type="email"id="admin_email"class="form-control" 
                    placeholder="enter your user email" autocomplete="off"
                     required="required" name="admin_email">
                </div>

                     <!--user image field-->
                <!--<div class="form-outline mb-4">
                    <label for="user_image" class="form-label">User Image</label>
                    <input type="file"id="user_image" class="form-control" 
                    autocomplete="off" required="required" name="user_image">
                </div>-->
                     <!--user password field-->
                <div class="form-outline mb-4">
                    <label for="admin_password" class="form-label">Enter Your password</label>
                    <input type="password"id="admin_password" class="form-control" 
                    placeholder="enter your user password" autocomplete="off"
                     required="required" name="admin_password">
                </div>
                <!--<div id="showError_user_password"></div>-->
                   
                <!--user confirm password field-->
                <div class="form-outline mb-4">
                    <label for="conf_admin_password" class="form-label">Confirm Password</label>
                    <input type="password"id="conf_admin_password" class="form-control" 
                    placeholder=" confirm  password" autocomplete="off"
                     required="required" name="conf_admin_password" onkeyup="check(this)">
                     <error id="alert" class="text-danger"></error>
                </div>

                <!--<div id="showError_conf_user_password"></div>-->
                 
                <!--user Address field-->
                <div class="form-outline mb-4" >
                    <label for="admin_address" class="form-label">Address</label>
                    <input type="text"id="admin_address" class="form-control" 
                    placeholder="enter your  address" autocomplete="off"
                     required="required" name="admin_address">
                </div>
               
                <!--user contact field-->
                <div class="form-outline mb-4" >
                    <label for="admin_contact" class="form-label">Mobile Number</label>
                    <input type="text"id="admin_contact" class="form-control" 

                    placeholder="enter your Mobile Number" autocomplete="off" required="required" 
                    name="admin_contact">
                </div>
                 
                 <!-- <p id="message" style="font-size:14px; margin:15px 0;display:inline-block;color:#000000;padding:5px 20px;">
                 </p>-->
                 

                 

                <!--user Button field-->
                <div class="mt-4 pt-2">
                   <button class="button bg-info py-2 px-3 border-0" type="submit"  name="admin_register">Register</button>
                  <!--
                <input type="submit" onclick="checkPassword()" value="Register" class="bg-info py-2 px-3 border-0 " name="user_register"> -->
                </div>

                <p class="small fw-bold pt-1 mb-0">
                    Already have an Account ?<a href="user_login.php"class="text-danger"> Login</a>
                </p>
         
            </form>
        </div>
    </div>
</div>
</head>
<!---last child--->
<div class="bg-info p-3 text-center">
    Developed by:-<br>
Gaikwad Rutuja ,
Nimse Nikita 
</div>
</div>



<!--bootstarap js link
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" >


/*
$(document).ready(function(){


$('#conf_user_password').keyup(function(){
  var user_password=$('#user_password').val();
var conf_user_password=$('#conf_user_password').val();
if(conf_user_password!==user_password)
{
  $('#showError_conf_user_password').html('** Password are Not Matching ');
  $('#showError_conf_user_password').css('color','red')
  return false;
}


});
});*/


/*
function checkPassword(){
  let user_password=document.getElementById("user_password").value;
  let  conf_user_password=document.getElementById("conf_user_password").value;
 console.log(user_password,conf_user_password);
 let message=document.getElementById
 ("message");
 if(user_password.length !=0){
  if(user_password==conf_user_password){
    message.textContent="Password Matched";
    message.style.backgroundcolor="#3ae374";
    

  }
  else{
    message.textContent="Password Dont Matched";
    message.style.backgroundcolor="#ff4d4d";
  }
 }

}*/


/*document.querySelector('.button').onclick=function(){
  var user_password=document.querySelector('.user_password').value,
  conf_user_password=document.querySelector('. conf_user_password').value;
  if(user_password==""){
    alert("field can not be empty");
  }
  else if(user_password !=conf_user_password){
    alert("Password did not match Try again");
    return false;
  }
}*/-->



</body>
<script type="text/javascript">

var admin_password=document.getElementById('admin_password');
var flag=1;
function check(elem){
if(elem.value.length>0){
  if(elem.value!=admin_password.value){
    document.getElementById('alert').innerText="confirm Password does not Match";
  }
  else{
    document.getElementById('alert').innerText=""; 
  }

}
else{
  document.getElementById('alert').innerText="please enter confirm password"; 
}
}
function validate(){
  if(flag==1){
    return true;
  }
  else{
    return false;
  }
}

</script>

</html>



<?php


$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());

if (isset($_POST['admin_register'])) {
	
	$admin_name =  $_POST['admin_name'];
  $admin_email =  $_POST['admin_email'];
  $admin_password = $_POST['admin_password'];
	$conf_admin_password =  $_POST['conf_admin_password'];
	$admin_address =  $_POST['admin_address'];
  $admin_contact =  $_POST['admin_contact'];
  /* New code

  $duplicate=mysqli_query($con,"select * from user_register where user_username='$user_username'or user_email='$user_email'");
  if(mysquli_num_rows( $duplicate>0)){
 echo"<script>alert('Username and email already taken')</script>";
  }
  else{
    if( $user_password ==$conf_user_password ){
      $sql="imsert into user_register values('','$user_username','$user_email','$user_password','$conf_user_password','$user_address','$user_contact')";
      mysqli_query($con,$sql);
      echo"<script>alert('Registration Successful');</script>";
    }
    else{
      echo"<script>alert('Password does not match');</script>";
    }
  }*/
         
		$sql= "INSERT INTO admin_register (`admin_name`,`admin_email`, `admin_password`, `conf_admin_password`, `admin_address`, `admin_contact`)
    VALUES ('$admin_name','$admin_email', '$admin_password', '$conf_admin_password','$admin_address', '$admin_contact')";
		
         if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Registration Successfully Complete..👍");
                    window.location="admin_login.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Registration Unsuccessful...!");
            window.location="admin_registration.php";
            </script>';
        }
}
?>