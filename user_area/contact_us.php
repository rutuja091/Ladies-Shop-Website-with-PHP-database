
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

@import url('https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@200;500&display=swap');
header{
font-size: 20px;
font-family: 'Montserrat', sans-serif;
}







  
   /*start contact card css*/
.contact_data1{
    background: #fff;
    border-radius: 02px;
    border-top: 04px solid #232526;
    border-bottom: 04px solid #232526;
    width:600px;
    height:auto;
   margin-left: 30%;
   margin-top:7%;
   margin-bottom:3%;
    border-radius:10px 10px;
    padding:10px;
    padding-top: 30px;
    box-shadow:0px 0px 10px 1px black ;
    
  }

  
 .contact_data1 ul {
    list-style: none;
    text-decoration:none;
  }
  
   .contact_data1 ul li {
    margin: 25px;
  }
  
   .contact_data1 ul li i {
    font-size: 25px;
    color: #232526;
    
  }
  #location{
    color:crimson;
  }
  #email{
    color:blue;
  }
  #call{
    color:green;
  }
  
  #location:hover{
    color:crimson;
    
    transform:translateY(2px);
  }

  #email:hover{
    color:blue;
  
    transform:translateY(2px);
  }

  #call:hover{
    color:green;
   
    transform:translateY(2px);
  }
  
   .contact_data1 ul li strong {
    margin-left: 10px;
    font-size: 1.2rem;
  }
  
  .contact_data1 ul li p {
    font-size: 14px;
    margin-left: 35px;
    margin-top: 10px;
  }
    
 /*start css for social media icons*/
 .sociadMedia{
  display:flex;
  justify-content:flex-start;
  align-items:center;
  flex-wrap:wrap;
  margin-left:45%;
  margin-bottom:5%;
 
  
}


.sociadMedia a{
  width:50px;
  height:50px;
  text-decoration:none;
  text-align:center;
  margin-right:20px;
  border-radius:5px;
  background-color:#02ccfe;
  transition:0.4s;
  margin-top: 25px;

}

.sociadMedia a i{
  color:#fff;
  font-size:30px;
  line-height:35px;
  border:1px solid transparent;
  transition-delay:0.4s;
  margin-top:9px;
}

/*start css social media icons hover effect*/
.sociadMedia a:hover{
   transform:translateY(-2px);
   background-color:#fff;
   border:1px solid #000000;
}

.fa-youtube:hover{
  color:red;

}

.fa-instagram:hover{
  color:crimson;
}

.fa-github:hover{
  color: black;
}

.fa-linkedin-in:hover{
  color:blue;
}

.links{
  color:#000000;
  text-decoration: none;
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


<!---third child--->
<div class="bg-light">
<h3 class="text-center">Ladies Shope</h3>
<p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>


<!--fourth child--->
<!--contact part start-->
<div class="contact_data1">

    <div class="head">
        <h1>Get In Touch</h1>
        </div>

    <!--start address call and email part -->
   <ul>
     <li>
       <a href=https://maps.app.goo.gl/rUoSC6S7X4UtsiuM7 class="links">
         <i class="fa-solid fa-location-dot"alt="location-icon"id="location"></i>
       <strong>Location:</strong>
       <p>RKMM , Ahmednagar</p></a>
      </li>
      <li>
       <a href="mailto:journeyjet@gmail.com" class="links">
       <i class="fa-solid fa-envelope"alt="email-icon"id="email"></i>
       <strong>Email:</strong>
       <p>nrladiesshop@gmail.com</p></a>
     </li>
     <li>
       <a href="tel:+91 000 000 0000" class="links">
       <i class="fa-solid fa-phone" alt="phone-icon"id="call"></i>
        <strong>Call:</strong>
       <p>+91 000 000 0000</p></a>
     </li>
    </ul>

   </div>
 <!--end address call and email part -->

<!--second  part start-->


  <!--social meaia starts-->
  <div class= "second-part">
  <span class="sociadMedia" >
            
    <a href="http://youtube.com/@roadtocode4u" class=""><i class="fa-brands fa-youtube " alt="youtube-icon"></i></a>
     <a href="http://github.com/rutuja091" class=""><i class="fa-brands fa-github" alt="github-icon"></i></a>
     <a href="http://instagram.com/roadtocode4u" class=""><i class="fa-brands fa-instagram" alt="instagram-icon"></i></a>
     <a href="http://linkedin.com/company/roadtocode" class=""><i class="fa-brands fa-linkedin-in" alt="inkedin-icon"></i></a>
   </span>
   </div>
 <!--social media end-->

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