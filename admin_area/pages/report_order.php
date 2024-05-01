<?php
$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM user_order ORDER BY id DESC";
 $query= $con->query($sql)
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User order Report </title>
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

 script{
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
                     <h2 class="display-6 text-center head-name">  User order Report</h2>
                         
                    </div>
                     
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                          <tr >
                          <td class="bg-secondary text-white">id</td>
                             <td class="bg-secondary text-white">Name</td>
                            <td class="bg-secondary  text-white">Email</td>
                            <td class="bg-secondary  text-white">address</td>
                            <td class="bg-secondary  text-white">mobile</td>
                          
                            <td class="bg-secondary  text-white">product_name</td>
                            <td class="bg-secondary  text-white">quantity</td>

                            <td class="bg-secondary  text-white">price</td>
                            <td class="bg-secondary  text-white">total</td>





                           
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
  echo "<td>".$res['address']."</td>";
  //echo "<td>".$res['conf_user_password']."</td>";
  echo "<td>".$res['mobile']."</td>";
  echo "<td>".$res[	'product_name']."</td>";
  echo "<td>".$res[	'quantity']."</td>";
  echo "<td>".$res[	'price']."</td>";
  echo "<td>".$res[	'total']."</td>";


 
		
  echo "</tr>";	
}
  
?>

                       </table>
                    </div>

        <!--            <div class="script-container">
                    <script>

if (window.print) { 
document.write('<form class=script-text>Click Here To Print Report 👉 ' + '<input  class=btn1  type=button name=print value="Print" ' + 'onClick="javascript:window.print()"> </form>'); 
}
</script>
</div>-->

                </div>    

            </div>

        </div>

    </div>
    
  <script>

if (window.print) { 
document.write('<form class=script-text>Click Here To Print Report 👉 ' + '<input  class=btn1  type=button name=print value="Print" ' + 'onClick="javascript:window.print()"> </form>'); 
}
</script>

     
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