<?php
$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());


// Get id from URL parameter

$id=$_GET['id'];

	
// Select data associated with this particular id

	$sql=  "SELECT * FROM user_register WHERE id = $id";


 	$query= $con->query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


	$user_username = $resultData['user_username'];

	$user_email = $resultData['user_email'];

	$user_password = $resultData['user_password'];
	
	$conf_user_password = $resultData['conf_user_password'];
	
	$user_address = $resultData['user_address'];
	
	$user_contact = $resultData['user_contact'];


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
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../about_us.php">About us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="..\contact_us.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./admin_area/admin_registration.php">Admin Area</a>
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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
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
    <a class="nav-link" href="#">Login</a>
</li>
  </ul>
</nav>





<div class="container-fluid my-3">
    <h2 class="text-center">Edit User Registration </h2>
    <div class="class-row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

                  <!--user name field-->
                <div class="form-outline mb-4" >
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text"id="user_username" class="form-control" 
                    placeholder="enter your user name" autocomplete="off" required="required"
                    name="user_username" value="<?php echo $user_username; ?>">
                </div>

                      <!--user email field-->
                <div class="form-outline mb-4">
                    <label for="user_email" class="form-label">Email</label>
                    <input type="email"id="user_email" class="form-control" 
                    placeholder="enter your user email" autocomplete="off"
                     required="required" name="user_email" value="<?php echo $user_email; ?>">
                </div>

                     <!--user image field-->
                <!--<div class="form-outline mb-4">
                    <label for="user_image" class="form-label">User Image</label>
                    <input type="file"id="user_image" class="form-control" 
                    autocomplete="off" required="required" name="user_image">
                </div>-->
                     <!--user password field-->
                <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">Enter Your password</label>
                    <input type="password"id="user_password" class="form-control" 
                    placeholder="enter your user password" autocomplete="off"
                     required="required" name="user_password" value="<?php echo $user_password; ?>">
                </div>
                   
                <!--user confirm password field-->
                <div class="form-outline mb-4">
                    <label for="conf_user_password" class="form-label">Confirm Password</label>
                    <input type="password"id="conf_user_password" class="form-control" 
                    placeholder=" confirm  password" autocomplete="off"
                     required="required" name="conf_user_password" value="<?php echo $conf_user_password; ?>">
                </div>
                 
                <!--user Address field-->
                <div class="form-outline mb-4" >
                    <label for="user_address" class="form-label">Address</label>
                    <input type="text"id="user_address" class="form-control" 
                    placeholder="enter your  address" autocomplete="off"
                     required="required" name="user_address" value="<?php echo $user_address; ?>">
                </div>
               
                <!--user contact field-->
                <div class="form-outline mb-4" >
                    <label for="user_contact" class="form-label">Mobile Number</label>
                    <input type="text"id="user_contact" class="form-control" 

                    placeholder="enter your Mobile Number" autocomplete="off" required="required" 
                    name="user_contact" value="<?php echo $user_contact; ?>">
                </div>

                <!--user Button field-->
                <div class="mt-4 pt-2">
                <input type="hidden"  class="bg-info py-2 px-3 border-0 " name="id"  value="<?php echo $id;?>"> 
                </div>

                <div class="mt-4 pt-2">
                <input type="submit" value="Update" class="bg-info py-2 px-3 border-0 " name="user_register" > 
                </div>
                
         
            </form>
        </div>
    </div>
</div>
</head>








<?php
// Include the database connection file



if (isset($_POST['user_register'])) 
{

	// Escape special characters in a string for use in an SQL statement
	$id = $_POST['id'];

	$user_username = $_POST['user_username'];

	$user_email =  $_POST['user_email'];

	$user_password =  $_POST['user_password'];
	
	$conf_user_password =  $_POST['conf_user_password'];
	
	$user_address =  $_POST['user_address'];
	
	$user_contact =  $_POST['user_contact'];

		
	 
	$sql = "UPDATE user_register SET `user_username` = '$user_username ',`user_email` = '$user_email  ', 
	`user_password` = '$user_password',`conf_user_password` = '$conf_user_password ',
	`user_address` = '$user_address ' ,
	`user_contact` = '$user_contact '  WHERE `id` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="reg-fetch-data.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="edit.php?id=$id";
            </script>';
        }
}

?>
</head>

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
      
</body>
</html>