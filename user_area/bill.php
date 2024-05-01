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

	$sql=  "SELECT * FROM user_payment WHERE id = $id";


 	$query= $con->query($sql);

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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<style>
 body{
  margin: 0;
  padding: 0;
}

.logo{
    height:70px;
    width:80px;
    border-radius:20px;
  }
  .script-container{
  margin-left:400px;
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
.container{
  margin-bottom:220px;

}






/*end css social media icons hover effect*/

/*end css for social media icons*/

 


  
 /* End contact  card css*/
</style>
</head>
<body>

<!--navbar-->
<div class="container-fluid p-0">


    <!-- first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">

 

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <img src="..\images\logo\logo.png"alt="" class="logo">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../homepage.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="./about_us.php">About us</a>
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



    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col">
                <div class="card">
                <div class="card-header">
                     <h2 class="display-6 text-center head-name"> Payment Receipt </h2>
                          <div class="header-btn">
                    
                  
                    </div>
                    </div>
                     
                    <div class="card-body">
                          <table class="table table-bordered text-center" >
                          <tr >
                             <td class="bg-secondary text-white">Sr. No</td>
                            <td class="bg-secondary  text-white">Customer  Name</td>
                            <td class="bg-secondary  text-white"> Customer Email</td>
                            <td class="bg-secondary  text-white">Customer Mobile No</td>
                           <!-- <td class="bg-secondary  text-white"> Confirm Password</td>-->
                           <td class="bg-secondary  text-white">Product Name</td>
                  
                            <td class="bg-success  text-white">Total</td>
                          
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
  
  echo "<td><b>".$res[	'total']."</b></td>";
 
		
  echo "</tr>";	
}
  
?>

                       </table>
                    </div>
                    <div class="script-container">
                    <script>

if (window.print) { 
document.write('<form class=script-text>Click Here To Print payment Bill 👉 ' + '<input  class=btn1  type=button name=print value="Print Bill" ' + 'onClick="javascript:window.print()"> </form>'); 
}
</script>
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