<?php
$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());

// Fetch data in descending order (lastest entry first)
//$sql = "SELECT * FROM add_product WHERE `id` = $id";
 //$query= $con->query($sql)

 $id=$_GET['id'];

 // Select data associated with this particular id
 
   $sql=  "SELECT * FROM add_product WHERE id = $id";
 
 
    $query= $con->query($sql);
   // Fetch the next row of a result set as an associative array
 
   $resultData = $query->fetch_assoc();
 
   $product_price = $resultData['product_price'];
   $product_name=$resultData['product_name'];


 
?>





<?php


// Select data associated with this particular id









// Fetch data in descending order (lastest entry first)
//$sql = "SELECT * FROM user_order WHERE id = $id";
 //$query= $con->query($sql)
?>

                        

 
                      
<?php




/*

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM  user_order   WHERE id = $id ";
$query_run=mysqli_query($con,$sql);
$check_product=mysqli_num_rows($query_run)>0;

 if($check_product)
 //{
  $i=0;
 while($row=mysqli_fetch_array($query_run))
 {
  echo "<tr>";
  echo" <td >".++$i."</td>";
  echo "<td>".$res['id']."</td>";
 }
//}*/
  ?>
  <?php
  // 
//

// Fetch data in descending order (lastest entry first)


/*
$id=$_GET['id'];

// Select data associated with this particular id

  $sql=  "SELECT * FROM add_product WHERE id = $id";


   $query= $con->query($sql);
  // Fetch the next row of a result set as an associative array

  $resultData = $query->fetch_assoc();

  $product_price = $resultData['product_price'];
  $product_name=$resultData['product_name'];
*/
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>

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
    margin-bottom:200px;
   
    
  }

.contact_data2  {
    background: #fff;
    border-radius: 02px;
    
    width: 700px;
    height:600px;
    margin-left: 30%;
    
    border-radius:10px 10px;
    padding:10px 10px;
   
    margin-bottom:150px;
     }
    
    /*second card form css*/
  .contact_data2 form {
   padding: 10px;
   padding-left:40px;
   /*border: 03px solid #232526;*/
   border-radius: 10px 10px;
   box-shadow:0 0 30px rgba(0 , 0 , 0, 0.2)
  
  

 }
 
 /*.contact_data2 form input {
   width: 90%;
   margin: 05px 0 0 10px;
   padding: 07px 10px;
   border: 1px solid #232526;
   font-size: 1rem;
   border-radius: 05px;


 }*/

.cust-input {
  width: 90%;
   margin: 05px 0 0 10px;
   padding: 07px 10px;
   border: 1px solid #232526;
   font-size: 1rem;
   border-radius: 05px;
}
 
  .contact_data2 h2 {
  margin-bottom:10px;
   border-bottom: 0.2rem #232526;
   font-size: 40px;
   margin-left:30% ;
 }
 
.contact_data2 label {
  display: block;
   padding-top: 15px;
   padding-left: 10px;
  
 }


 
 .pro-dtl{
  font-size:20px;
  margin-left:30%;
 }


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

 }



.product-inp{
  width:200px;
  display:flex;
  margin:5px auto;
  border-radius: 05px;
}
  
 
.product-dtl{

   width: 60%;
   margin: 05px 0 0 10px;
   padding: 07px 10px;
   border: 1px solid #232526;
   font-size: 1rem;
   margin: 10px auto;
   border-radius: 05px;
   border:none;
}

.button{
  height:50px;
  width:150px;
  border:none;
  background-color:#00ccff;
  border-radius:10px;
  font-size:20px;
  margin-left:100px;
  margin-top:20px;
 color:white;
 

}
</style>
</head>
<body >
<!--onload="multiply();"-->
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


</div>


<!--fourth child--->
<!--contact part start-->


    <!--start third part-->
    <div class="third-part">
      <div class="contact_data2 ">
        <h2>Product Order</h2>


   
  <tr>
 
 <?php  //echo" <td >".++$i."</td>";?>


        <form action="#" method="post" class="">
          <label for="name"><b>Enter Customer Name</b></label>
          <input  class="cust-input" type="text" name="name" required/>
          <label for="email "><b>Enter Email</b></label>
          <input   class="cust-input"  type="email" name="email" required/>
          <label for="address"><b>Enter Address</b></label>
          <input    class="cust-input" type="text" name="address" required/>
          <label for="mobile no"><b>Enter Mobile No</b></label>
          <input    class="cust-input" type="number" name="mobile" id="" cols="30" rows="05" required>

           <label class="pro-dtl"><b>Product Detail</b></label>

    
<div class="product-dtl">
          



<?php


// Fetch the next row of a result set as an associative array
/*$i=0;
while ($res = $query->fetch_assoc())
 {
  echo "<table>";
  echo "<tr>";
  //echo" <td >".++$i."</td>";
  echo "<td>".$res['product_price']."</td>";
  
		
  echo "</tr>";	
  echo "</table>";	
}
*/



 //$query="SELECT * FROM `add_product` WHERE `id` = $id ";
/*
 $query = "SELECT * FROM add_product WHERE `id` = $id";
 //$query_run= $con->query($query)
 $query_run=mysqli_query($con,$query);
 $i=0;
 while($row=mysqli_fetch_array($query_run)){
   ?>
   <tr>
  
  <?php echo" <td >".++$i."</td>";?>
 

      <td> <?php echo $row['product_price'];  ?></td>
      
      <?php
       
      

 }*//*
 $num=$_GET['id'];

 $sql=  "SELECT * FROM user_order WHERE id = $num";
  
 if(mysqli_query($con, $sql))
        {
         // Obtain last inserted id
         $last_id = mysqli_insert_id($con);
         echo "Records inserted successfully. Last inserted ID is: " . $last_id;
       } else{
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
       }
       
       // Close connection
       mysqli_close($con);


       */


?>

<!--<label  for="price"><b>Total Price:</b></label>-->
<label  for="price"><b>Product Name</b></label>
<input  class="product-inp"type="text" readonly name="product_name"  value="<?php echo  $product_name;?>"  required/>


         <label  for="name"><b>Quantity:</b></label>
          <input class="product-inp" type="number" id="quantity" onclick="multiply();" value="0" name="quantity" required/>


          <label  for="price"><b>Price:</b></label>

          <input  class="product-inp"type="number" readonly name="price" id="price" onclick="multiply();"  
          value="<?php echo $product_price;?>"  required/>
    
    <label  for="price"><b>Total Price:</b></label>
    <input class="product-inp" type="text"id="total" name="total"/>
      
          <!--<label  for="price"><b>Total Amount:</b></label>
          <input class="product-inp" type="number" name="total_price" required/>-->
        <!--- <button  class="button bg-info py-2 px-3  mt-4  mb-4 ms-5 border-0 rounded" name="user_order" 
          value=" //  echo " <a href=\"..\user_area\payment.php?id=$resultData[id]\></a>"

        
</button>-->


<?php echo  "<input type=submit name=user_order  value='Order Now' class=button />";?>
<?php echo "</a>";?>


<?php
/*

// Get the ID of the inserted row
$lastInsertedID = mysqli_insert_id($con);

// Use the ID in further operations
$query = "SELECT id FROM user_order ";

$result = mysqli_query($con, $query); 

?> 


 <button class="button" >
 <?php echo "<a href=\"..\user_area\payment.php?id=$lastInsertedID\">Pay Now</a>";?>
</button>
    */


?>
         
<!--<button class="button bg-info py-2 px-3  mt-4  mb-4 ms-5 border-0 rounded" type="submit"  name="user_order">Order Now</button>
          <a href="..\user_area\order.php"></a>--->
          </div>
        </form>
      </div>
      </div>
    

     
<script>
  function multiply()
  {
  let quantity=document.getElementById("quantity").value;
  let price=document.getElementById("price").value;
  let total=parseFloat(quantity)*parseFloat(price);
  document.getElementById("total").value=total;
  }
  </script>

                            

<?php
// Include the database connection file

/*

if (isset($_POST['Submit'])) 
{

	// Escape special characters in a string for use in an SQL statement

  $id = $_POST['id'];
	

	$product_name =$_POST['product_name'];


	$product_price = $_POST['product_price'];
	
	
}	
	 
	
?>

    

 */


 

?>


     
 </div>
</div>
<!---last child--->
<div class="bg-info  p-3  text-center">
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


if (isset($_POST['user_order'])) {
  
	$name =  $_POST['name'];
  $email =  $_POST['email'];
  $address =  $_POST['address'];
	$mobile=  $_POST['mobile'];
  $product_name	 =  $_POST['product_name'];
  $quantity	 =  $_POST['quantity'];
  $price =  $_POST['price'];
  $total	 =  $_POST['total'];
 
         
		$sql= "INSERT INTO user_order (`name`,`email`, `address`, `mobile`, `product_name`, `quantity`, `price`, `total`)
    VALUES ('$name','$email', '$address', '$mobile','$product_name', '$quantity','$price', '$total')";
		
       if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Your Order is  Done..👍");
                    window.location="make_payment.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Order Not Done...!");
            window.location="order.php";
            </script>';
        }








      }
      ?>

       










