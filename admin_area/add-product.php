<?php

// Include the database connection file
$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());

/*if(isset($_POST["submit"]))
{
     $product_name=$_POST["product_name"];
     $product_desc =$_POST["product_desc"];
	   $product_price=$_POST["product_price"];
         if($_FILES["product_img"]["error"]===4)
         {
           echo"<script> alert('Image does not Exist');</script>";
         }
        else
        {
           $filename=$_FILES["product_img"]["name"];
           $filesize=$_FILES["product_img"]["size"];
           $tmpName=$_FILES["product_img"]["tmp_name"];
           $validImageExtension=['jpg' , 'jpeg' , 'png'];
           $imageExtension=explode('.',$filename );
           $imageExtension=strtolower(end($imageExtension));
        }

             if(!in_array($imageExtension,$validImageExtension))
            {
               echo"<script> alert('Invalid Image Extension');</script>";
            }
           
 
      else if($filesize > 1000000)
      {
      echo"<script> alert('Image size to large');</script>";
      }
else
{
  $newImageName=uniqid();
  $newImageName='.' .$imageExtension;
  move_uploaded_file( $tmpName,'.\product_images\t-shirt', $newImageName);
  $query="insert into add_product values('',' $newImageName' ,' $product_name',' $product_desc','$product_price')";
  mysqli_query($con,$query);
   echo"<script> alert('Successfullly added');
   document.location.href='add.php'</script>";

}

}
*/
/*
$statusMsg = ''; 
 
// File upload directory 
$targetDir = "uploads/"; 
 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = $db->query("INSERT INTO add_product (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
                if($insert){ 
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg;
*/




/*$target_dir = "product_images/";
$target_file = $target_dir . basename($_FILES["product_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["product_img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["product_img"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["product_img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}*/



// Create database connection


// Initialize message variable
/*$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {
         
      // Get image name
      $image = $_FILES['product_img']['name'];
      // Get text
      

      // image file directory
      $target = "product_images/".basename($image);

      $sql = "INSERT INTO add_product (product_img) VALUES ('$image')";
      // execute query
      mysqli_query($con, $sql);

      if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target)) {
              $msg = "Image uploaded successfully";
      }else{
              $msg = "Failed to upload image";
      }

 
    }
$result = mysqli_query($con, "SELECT * FROM add_product");*/


?>

<?php
$msg = "";
if(isset($_POST["submit"]))
{    $image = $_FILES['product_img']['name'];
  $target = "product_images/".basename($image);

     $product_name=$_POST["product_name"];
     $product_desc =$_POST["product_desc"];
	   $product_price=$_POST["product_price"];
     $product_category=$_POST["product_category"];
    

$sql= "INSERT INTO add_product  (`product_img`,`product_name`,`product_desc`, `product_price`,`product_category`)
VALUES ('$image','$product_name',' $product_desc ', '$product_price','$product_category')";
		
mysqli_query($con, $sql); 
 
if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target)) {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}


$result = mysqli_query($con, "SELECT * FROM add_product");


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

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
          <a class="nav-link active" aria-current="page" href=".\dashbord.php">Home</a>
        </li>
        
        <!--<li class="nav-item">
          <a class="nav-link" href="../about_us.php">About us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="..\contact_us.php">Contact us</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="..\admin_area\admin_registration.php">Register</a>
        </li>
        <!--<li class="nav-item">
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
<div class="container-fluid my-3 mt-5">
    <h2 class="text-center">Add Product </h2>
    <div class="class-row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">

                  <!--user name field-->
                <div class="form-outline mb-4 mt-3" >
                    <label for="product_img" class="form-label">Product Image</label>
                    <input type="file"id="product_img" class="form-control" 
                    placeholder="Product Image" autocomplete="off"
                    required="required" name="product_img" accept=".jpg , .jpeg , .png ,">
                </div>

                      <!--user email field-->
                <div class="form-outline mb-4">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text"id="product_name" class="form-control" 
                    placeholder="Product Name" autocomplete="off"
                     required="required" name="product_name">
                </div>

                    
                     <!--user password field-->
                <div class="form-outline mb-4">
                    <label for="product_desc" class="form-label">Enter Product Description</label>
                    <input type="text"id="product_desc" class="form-control" 
                    placeholder="Product Description" autocomplete="off"
                     required="required" name="product_desc">
                </div>

              
                   
                <!--user confirm password field-->
                <div class="form-outline mb-4">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="text"id="product_price" class="form-control" 
                    placeholder="Product Price" autocomplete="off"
                     required="required" name="product_price" >
                    
                </div>

                <div class="form-outline mb-4">
                    <label for="product_category" class="form-label">Product Category</label>
                    <select type="text"id="product_category" class="form-control" 
                    placeholder="product category" autocomplete="off"
                     required="required" name="product_category"  >
                     <option></option>
                     <option>T-Shirt</option>
                     <option>Lehanga</option>
                     <option>Jewellary</option>
                     <option>Sandel</option>
                     <option>Beauty-Product</option>
                     <option>Watch</option>
                     </select>
                        
                    
                </div>

                
                
               <!--user Button field-->
                <div class="mt-4 pt-2">
                   <button class="button bg-info py-2 px-3 border-0" type="submit"  name="submit">Add Product</button>
                 
             
                </div>

               
         
            </form>
        </div>
    </div>
</div>
</head>
<!---last child--->
<div class="bg-info p-3 text-center mt-5">
    Developed by:-<br>
Gaikwad Rutuja ,
Nimse Nikita 
</div>
</div>



<!--bootstarap js link
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" >

-->



</body>


</html>



<?php

// Include the database connection file
/*$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());







if (isset($_POST['submit'])) {
	
	$product_img=$_FILES['product_img'];
  $product_name=$_POST['product_name'];
  $product_desc =$_POST['product_desc'];
	$product_price=$_POST['product_price'];
	
 
         
		$sql= "INSERT INTO add_product (`product_img`,`product_name`, `product_desc`, `product_price`)VALUES ('$product_img','$product_name', '$product_desc', '$product_price')";
		
         if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Product added Successfully ..👍");
                    window.location="dd-product.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert (" Product not added..!");
            window.location="add-product.php";
            </script>';
        }
}
*/
?>




