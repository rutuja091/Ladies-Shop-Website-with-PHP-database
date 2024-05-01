<?php
$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM user_payment ORDER BY id DESC";
 $query= $con->query($sql)
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Fetch </title>
     <!---bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">

<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!--css file-->
<link rel="stylesheet" href="style.css">
<style>
   .btn-info:hover{
    background-color:grey;
    color: white;
    border-color:black;
    border-width: 1px;


  }
  .logo{
    height:70px;
    width:80px;
    border-radius:20px;
  }
  
  .card-header{
   display:flex;
 

  }
 
.header-btn{
  margin-left:250px;
  margin-top:10px;
  

}
  .head-name{
    margin-left:450px;
    margin-top:10px;
  }
 .btn1{
  margin:15px;

  border:none;
  border-radius:10px;
  padding:10px;

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
  <img src=".\..\..\images\logo\logo.png" alt="" class="logo">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
  <li class="nav-item">
          <a class="nav-link" href="./../dashbord.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./../admin_registration.php">Register</a>
        </li>
        <!--
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
<a class="nav-link" href="./user_area/user_login.php"></a>
</li>
</ul>
</nav>


    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col">
                <div class="card">
                <div class="card-header">
                     <h2 class="display-6 text-center head-name"> Manage User Payment </h2>
                          <div class="header-btn">
                    
                     <a href="..\pages\report_payment.php"><button class="btn1 bg-info">View Report</button></a>
                    </div>
                    </div>
                     
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                          <tr >
                             <td class="bg-secondary text-white">User Id</td>
                            <td class="bg-secondary  text-white">User Name</td>
                            <td class="bg-secondary  text-white">Email</td>
                            <td class="bg-secondary  text-white">Mobile No</td>
                           <!-- <td class="bg-secondary  text-white"> Confirm Password</td>-->
                           <td class="bg-secondary  text-white">Product Name</td>
                            <td class="bg-secondary  text-white">Payment Method</td>
                            <td class="bg-secondary  text-white">Card Number</td>
                            <td class="bg-secondary  text-white">Total</td>
                            <td class="bg-danger  text-white">Delete</a></td>
                          </tr>

                         <tr>
                            
<?php


// Fetch the next row of a result set as an associative array
$i=0;
while ($res = $query->fetch_assoc())
 {
  echo "<tr>";
  echo" <td >".++$i."</td>";
  echo "<td>".$res['name']."</td>";
  echo "<td>".$res['email']."</td>";
  echo "<td>".$res['mobile']."</td>";
  echo "<td>".$res['product_name']."</td>";
  echo "<td>".$res[	'payment_method']."</td>";
  echo "<td>".$res[	'card_num']."</td>";
  echo "<td>".$res[	'total']."</td>";
 echo "<td ><a href=\"delete_payment.php?id=$res[id]\" onClick=\"return confirm('Are you sure ,you want to delete?')\">Delete</a></td>";
		
  echo "</tr>";	
}
  
?>

                       </table>
                    </div>

                </div>    

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
      
</body>
</html>