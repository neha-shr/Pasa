<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Pasa</title>

    

    <!--Css Links-->
    <link rel="stylesheet" href="index.css">

 </head>
<body>

<body>



<header class="header">
        <nav class="nav container">
            
            <div class="navigation d-flex">
                    
                <!--Logo-->
                <div class="logo">
                   <!-- <h2>Pasa</h2> -->
                   <img src="icons/logo.png" alt="Logo"/>
                </div>

                <!--Menu bar-->
                <div class="menu">
    
                    <div class="top">
                        <span class="close">Close <i class="bx bx-x"></i></span>
                    </div>
    
                    <ul class="nav-list d-flex">
    
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        
                        <li class="nav-item">
                          <a href="product.html" class="nav-link">Product</a>
                      </li>
                        <!-- <li class="nav-item">
                            <a href="#service" class="nav-link">Service</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="sell.html" class="nav-link">Sell</a>
                        </li>
                
                    </ul>
                </div>

       
              <div class="d-flex logout">
                <button type="submit" name="logout"><a href="logout.php">Logout</a></button>
            </div>

    
            </div>
        
        </nav>

</header>




<!--Product Description-->
<?php 
     include "dbconn.php";
 
     $newid=$_GET["id"];
          
     $selectquery = "select * from post where id='$newid' ";
    
     $query = mysqli_query($conn, $selectquery);
     $result = mysqli_fetch_array($query);
 
    

       $title=$result['title'];
       $price=$result['price'];
       $image=$result['image'];
       $detail=$result['detail'];



     
 ?>


<form method="GET" action="cart.php">
 <section class="product-description">
     <div class="small-container single-product">
       <div class="row">
         <div class="col-2 im" >
 
         <img src=" <?php  echo $result['image'];   ?> "/>
         </div>
         <div class="col-2">
           <h2><?php  echo $result['title'];   ?> </h2>
           <p class="price"> <span> <?php  echo $result['price'];   ?></p></span><br>
          <div>
             <select>
                 <option value="Select Size" selected disabled>Select Size</option>
                 <option value="1">S</option>
                 <option value="2">M</option>
                 <option value="3">L</option>
               
               </select>
          </div>
           
       

           <button class="product-btn"> Buy Now</a><br></button>

           <h3>Details</h3><br>
          <p> <?php  echo $result['detail'];   ?>
           </p>
             
         </div>
     </div>
     </div>
 </section>
 </form>

     

    <!--Footer part-->
    <footer id="footer-part" class="section footer">
    <div class="footer-container">
        <div class="menu">
            <h3>Menu</h3>
            <ul class="menu-name">
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Service">Service</a></li>
                <li><a href="sell.html">Sell</a></li>
            </ul>
        </div>
        <div class="contact">
            <h3>Contacts</h3>
            <p> <img src="icons/search-location-solid.svg" alt=""> Location</p>
            <p><img src="icons/phone-solid.svg" alt=""> 986694358</p>
            <p><img src="icons/envelope-regular.svg" alt=""><a href="mailto:abc@gmail.com">abc@gmail.com</a> </p>
        </div>
        <div class="social-media">
            <h3>Follow us on</h3>
            <img src="icons/facebook-brands.svg" alt="">
            <img src="icons/instagram-brands.svg" alt="">
            <img src="icons/twitter-square-brands.svg" alt="">
            <img src="icons/linkedin-brands.svg" alt="">
        </div>
    </div>

    <div class="credit"> copyright @ 2021 by <span>Pasa designer</span> </div>


  </footer>


</body>
</html>