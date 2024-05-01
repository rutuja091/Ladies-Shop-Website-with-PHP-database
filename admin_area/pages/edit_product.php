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

	$sql=  "SELECT * FROM add_product WHERE id = $id";


 	$query= $con->query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


   $product_img= $resultData['product_img'];

	$product_name = $resultData['product_name'];

	$product_desc = $resultData['product_desc'];
	
	$product_price = $resultData['product_price'];
	
	$product_category = $resultData['product_category'];
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>

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
    <img src=".\..\..\images\logo\logo.png"alt="" class="logo">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="./../dashbord.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./../admin_registration.php">Register</a>
        </li>
        
        <!--<li class="nav-item">
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
    <a class="nav-link" href="#"></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#"></a>
</li>
  </ul>
</nav>





<div class="container-fluid my-3">
    <h2 class="text-center">Update Product</h2>
    <div class="class-row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">

                  <!--user img field-->
                <div class="form-outline mb-4" >
                    <label for="product_img" class="form-label">Product Image</label>
                    <input type="file"id="product_img" class="form-control" 
                    placeholder="product image" autocomplete="off" 
                    name="product_img" value="<?php  echo $product_img; ?>">
                </div>

                      <!--user  name field-->
                <div class="form-outline mb-4">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text"id="product_name" class="form-control" 
                    placeholder="Product Name" autocomplete="off"
                     required="required" name="product_name" value="<?php echo $product_name; ?>">
                </div>

                
                     <!--user   desc field-->
                <div class="form-outline mb-4">
                    <label for="product_desc" class="form-label">Product Description</label>
                    <input type="text"id="product_desc" class="form-control" 
                    placeholder="Product Description" autocomplete="off"
                     required="required" name="product_desc" value="<?php echo $product_desc; ?>">
                </div>
                   
                <!--user  field-->
                <div class="form-outline mb-4">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="text"id="product_price" class="form-control" 
                    placeholder="Product Price" autocomplete="off"
                     required="required" name="product_price" value="<?php echo $product_price; ?>">
                </div>
                 
                <!--user category field-->
                <div class="form-outline mb-4" >
                    <label for="product_category" class="form-label">Product Category</label>
                    <input type="text"id="product_category" class="form-control" 
                    placeholder="Product Category" autocomplete="off"
                     required="required" name="product_category" value="<?php echo $product_category; ?>">
                </div>
               
               

                <div class="mt-4 pt-2">
                <input type="submit" value="Update" class="bg-info py-2 px-3 border-0 " name="product_update" > 
                </div>
                
         
            </form>
        </div>
    </div>
</div>
</head>








<?php
// Include the database connection file



if (isset($_POST['product_update'])) 
{

	// Escape special characters in a string for use in an SQL statement

  $id = $_POST['id'];
	$product_img= $_POST['product_img'];

	$product_name =$_POST['product_name'];

	$product_desc = $_POST['product_desc'];
	
	$product_price = $_POST['product_price'];
	
	$product_category = $_POST['product_category'];
	
	
	
		
	 
	$sql = "UPDATE add_product SET  `product_img` = '$product_img',  `product_name` = '$product_name  ', 
	`product_desc` = '$product_desc',`product_price` = '$product_price ',
	`product_category ` = '$product_category'  WHERE `id` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="product_fetch.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="edit_product.php"; ;
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