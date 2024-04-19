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

	$sql=  "SELECT * FROM user_order WHERE id = $id";


 	$query= $con->query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();

	$name= $resultData['name'];

	$email =$resultData['email'];

	$mobile = $resultData['mobile'];
	
	$total = $resultData['total'];

  $product_name = $resultData['product_name'];
	

	
?>
   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>

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
   box-shadow:0 0 30px rgba(0 , 0 , 0, 0.2);
 }


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
</style>
</head>
<body onload="multiply();">

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

    <!--start third part-->
    <div class="third-part">
      <div class="contact_data2 ">
        <h2>Payment</h2>


   
  <tr>
 
 <?php  //echo" <td >".++$i."</td>";?>


        <form action="#" method="post" class="">
          <label for="name"><b>Customer Name</b></label>
          <input  class="cust-input" type="text" name="name" value="<?php echo $name;?>" required readonly />
          <label for="email "><b> Email</b></label>
          <input   class="cust-input"  type="email" name="email"  value="<?php echo $email;?>" required readonly />
          <label for="mobile no"><b>Mobile No</b></label>
          <input    class="cust-input" type="number" name="mobile" value="<?php echo $mobile;?>" id="" cols="30" rows="05" required readonly >
           <label class="pro-dtl"><b>Payment Detail</b></label>

    
<div class="product-dtl">
          

<!--<label  for="price"><b>Total Price:</b></label>-->


<label  for="product_name"><b>Product Name</b></label>
          <input class="product-inp" type="text" id="product_name" value="<?php echo $product_name;?>" name="product_name" readonly required/>

<label for="payment_method" class="form-label">Select Payment Mode</label>
                    <select type="text"id="payment_method" class="form-control" 
                    placeholder="payment Method" autocomplete="off"
                     required="required" name="payment_method"  >
                     <option>Credit Card</option>
                     <option>Debit Card</option>
                     </select>





		  <label  for="name"><b>Card Number</b></label>
          <input class="product-inp" type="number" id="card_num"  name="card_num" required/> 
    <label  for="price"><b>Total Price:</b></label>
    <input class="product-inp" type="text"id="total" readonly  name="total"  value="<?php echo $total;?> "/>
      
          <!--<label  for="price"><b>Total Amount:</b></label>
          <input class="product-inp" type="number" name="total_price" required/>-->
         
<button class="button bg-info py-2 px-3  mt-4  mb-4 ms-5 border-0 rounded" type="submit"  name="payment">Payment</button>
          <a href="..\user_area\order.php"></a>
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

/*

if (isset($_POST['payment'])) {
  
	$name =  $_POST['name'];
  $email =  $_POST['email'];
	$mobile=  $_POST['mobile'];
  $payment_method	 =  $_POST['payment_method'];
  $card_num =  $_POST['card_num'];
  $total	 =  $_POST['total'];
 
         
		$sql= "INSERT INTO user_payment(`name`,`email`, `mobile`, `payment_method`, `card_num`, `total`)
    VALUES ('$name','$email', '$mobile',' $payment_method	',' $card_num', '$total')";
		
       if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Payment Successfull👍");
                    window.location="bill.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Payment not done...!");
            window.location="payment.php";
            </script>';
        }

        

       
}


*/







?>
<?php


if (isset($_POST['payment'])) { 
	$name =  $_POST['name'];
  $email =  $_POST['email'];
 	$mobile =  $_POST['mobile'];
  $payment_method	=  $_POST['payment_method'];
  $card_num	 =  $_POST['card_num'];
   $total	 =  $_POST['total'];
   $product_name =  $_POST['product_name'];
     
		$sql = "INSERT INTO user_payment 
    
    
    
    
    (`name`,`email`,`mobile`,`payment_method`,`card_num`,`total`,`product_name`)
    VALUES ('$name','$email',  '$mobile','$payment_method', '$card_num','$total','$product_name')";
		
       if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Your payment is  Done..👍");
                    window.location="create_bill.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("payment Not Done...!");
            window.location="payment.php";
            </script>';
        }
      }
      ?>

       
