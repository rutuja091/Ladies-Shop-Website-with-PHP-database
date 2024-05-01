<?php
//session_start();

$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());


/* direct access code*/
 
//if(isset($_SESSION['user_username'])){
  //header("location:..\homepage.php");
//}

/* end direct access code */








  /*
if(isset($_POST['user_login'])){
  $user_username = ($_POST['user_username']); 
  $user_password = ($_POST['user_password']);
  $result=mysqli_query($con,"select * from user_register where user_username='$user_username'");
  $row=mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0){
    if($user_password==$row["user_password"]){
     $_SESSION["user_username"]=true;
     $_SESSION["id"]=$row["id"];
     header(".\homepage.php");
      
    }

    else{
      echo"<script>alert('Wrong password...!');</script>";
    }
  }
  else{
    echo"<script>alert('User not Registed....!');</script>";
  }
}*/


/*session_start();
include("dbcon.php");

if (isset($_POST['user_username']) && isset($_POST['user_password'])){

  function validate($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return data;

  }
}

$user_username = validate($_POST['user_username']);
$user_password = validate($_POST['user_password']);

if(empty($user_username)){
  header("Location:login.php?error=User name is required");
  exit();

}
 else if(empty($user_password)){
  header("Location:login.php?error=User password is required");
  exit();
 }
 
 $sql= "SELECT * FROM user_register WHERE user_username ='$user_username'  AND user_password = '$user_password'";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)===1){
  $row=mysqli_fetch_assoc($result);
  if($row['user_username']===$user_username && $row['user_password']===$user_password){
    echo"Logged In";
    $_SESSION['user_username']=$row['user_username'];
    $_SESSION['id']=$row['id'];
    header("Location:index.php");
    exit();

  }
  else{
    header("Location:user_login.php?error=Incorrect User Name Or Password ");
    exit();
    
 }
}
else{
  header("Location:login.php");
  exit();
}*/

/*
if(isset($_POST["user_register"])){
  include("dbcon.php");
  $user_username = mysqli_real_escape_string($con, $_POST['user_username']);
  $user_password = mysqli_real_escape_string($con, $_POST['user_password']);
 
  $sql = "SELECT * FROM user_register WHERE user_username= '$user_username'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
  if($row)
  {
    if(password_verify($user_password,$row["user_password"]))
    {
      header("Location:C:\xampp\htdocs\project\Ladies_Shope_project\index.php");
    }
    }
    else
    {
     ' <html>
     <body>
      <script>
      alert("invalid username or password");
      window.location.href="user_login.php";
      </script>
      </body>
      </html>';
    }

  }*/


session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $admin_name=$_POST['admin_name'];
  $admin_password=$_POST['admin_password'];
  if(!empty($admin_name) && !empty( $admin_password) && !is_numeric($admin_name))
  {
    $query="select * from admin_register where admin_name='$admin_name'";
    $result=mysqli_query($con,  $query);

    if($result){
      if($result && mysqli_num_rows($result)>0)
      {
        $user_data=mysqli_fetch_assoc($result) ;
        if( $user_data['admin_password']== $admin_password)
        {
          header("location:../admin_area/dashbord.php");
          die;

        }
      }
    }
    echo "<script  type=text/javascript'> alert ('wrong admin name or  password')</script>";
  }
  else{
    echo "<script  type=text/javascript'> alert ('login successful')</script>";
  }
}


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
      <img src="..\images\logo\logo.png" alt="" class="logo">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./dashbord.php">Home</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="../display_all.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
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
    <div class="container-fluid m-3 mt-5">
 <h2 class="text-center mb-5">Admin Login</h2>
 <div class="row d-flex justify-content-center">
    <div class="col-lg-6 col-xl-5 ">
        <img src="..\images\admin\admin_login\a_login.jpg"alt="Admin Registration" class="img-fluid">
    </div>

    <div class="col-lg-6 col-xl-4 mt-5 mb-5">
        <form action="" method="post">
           
        <div class="form-outline mb-4">
                <label for="admin_name" class="form-label">admin name</label>
                <input type="text" id="admin_name" name="admin_name"
                 placeholder="Enter your username" required="required" class="form-control">
            </div>
           
            <div class="form-outline mb-4">
                <label for="admin_password" class="form-label">Password</label>
                <input type="password" id="admin_password" name="admin_password"
                 placeholder="Enter your password" required="required" class="form-control">
            </div>
            
           
            
                <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_login" value="Login"> 
                <p class="small fw-bold mt-2 pt-1">Don't you have an account?<a href="admin_registration.php" class="link-danger">Register</a></p>
            </div>
        </form>
    </div>


 </div>
    </div>
    
<!---last child--->
<div class="bg-info p-3 text-center">
    Presented by:-<br>
Gaikwad Rutuja ,
Nimse Nikita 
</div>
</div>



<!--bootstarap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
 </script>
 </body>
</html>