<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Pasa</title>

    

    <!--Css Links-->
    <link rel="stylesheet" href="index.css">
   
</head>
<body>
  <!--Header part-->
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
    
    
                    <ul class="nav-list d-flex">
    
                        <li class="nav-item">
                            <a href="main.php" class="nav-link">Home</a>
                        </li>
                        
                        <li class="nav-item">
                          <a href="product.php" class="nav-link">Product</a>
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

        

        <!--Imager Part-->
        <div class="special">
            <div class="special-content d-flex container">
                <div class="left">
                    <span class="subtitle">GET OUR SPECIAL OFFERS</span>
                    <h1 class="title">UP TO
                        <span class="color">50% <br> Discount</span>
                    on This Dashain
                    </h1>
                    <h5>From 14th sep to 20th sep</h5>
                    <a href="sessioncheck.php" class="btn">SHOP NOW</a>
                </div>
    
                <div class="right">
                    <img src="images/b.jpg" alt="">
                </div>
            </div>
        </div>
       
               
        
        
    </header>
    
   

   <!--Categories-->
   <section class="categories">
    <div class="title">
      <h1>Categories</h1>
  </div>
  <div class="category-card container">
      <div class="category">
          <div class="img-cover">
              <img src="dress/sari.jpg" alt="">
          </div>
          <p>Ethnic Wear</p>
      </div>

      <div class="category">
          <div class="img-cover">
              <img src="dress/ab.jpg" alt="">
          </div>
          <p>Formal Wear</p>
      </div>


      <div class="category">
          <div class="img-cover">
              <img src="dress/aa.jpg" alt="">
          </div>
          <p>Party Wear</p>
      </div>

      <div class="category">
          <div class="img-cover">
              <img src="dress/sas.jpg" alt="">
          </div>
          <p>Western Wear</p>
      </div>
  </div>

   </section>

 


   
<!-- Product -->
<section class="product-part">
    <div class="title"><h1>Product</h1></div>
<div class="main">
<?php 
     include "dbconn.php";
   
     $selectquery = "select * from post";
     $query = mysqli_query($conn, $selectquery);
     $result = mysqli_fetch_array($query);
     if($query-> num_rows > 0){
     while($result = mysqli_fetch_array($query)){
       $id=$result['id'];
       $title=$result['title'];
       $price=$result['price'];
       $image=$result['image'];
       $detail=$result['detail'];
       
?>

<form method="GET" action="p.php">
    <div class="card">

        <div class="imagee">
            <img src=" <?php  echo $result['image'];   ?> "/>
        </div>
        <div class="titlee">
            <?php  echo $result['title'];   ?> 
        </div>
        <div class='pricee'>
            <?php  echo $result['price'];   ?>
        </div>
        
        <div>
     <button class="view">    <a href="p.php?id=<?php echo $id; ?>"> View More</a> </button>
         </div> 
    </div>
</form>

<?php
     }
    }
    ?>  

</div>
  </section>

    <!--Footer part-->
  <footer id="footer-part" class="section footer">
    <div class="footer-container">
        <div class="menu">
            <h3>Menu</h3>
            <ul class="menu-name">
                <li><a href="main.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
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
