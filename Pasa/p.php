<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasa</title>
     <!--Boxicon-->
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

     <!--FontAwesome link-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
         integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
 
     <!--Css Links-->
     <link rel="stylesheet" href="index.css">
     <!-- <link rel="stylesheet" href="front.css"> -->
 
     <!--Font links-->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
</head>
<body>
    
    
  <!--Header part-->
  <header class="header">
    <nav class="nav container">
        
        <div class="navigation d-flex">

            <!--Hamburger-->
            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
                
            <!--Logo-->
            <div class="logo">
               <!-- <h2>Pasa</h2> -->
               <img src="icons/logo.png" alt="">
            </div>

            <!--Menu bar-->
            <div class="menu">

                <div class="top">
                    <span class="close">Close <i class="bx bx-x"></i></span>
                </div>

                <ul class="nav-list d-flex">

                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link">Service</a>
                    </li>
                    <li class="nav-item">
                        <a href="sell.html" class="nav-link">Sell</a>
                    </li>
            
                </ul>
            </div>

            <div class="icons d-flex">
                <div>
                     <i class="bx bx-search search"></i>
                </div>
                <div>
                  <i class="bx bx-user"></i>
                </div>
                <!-- <div>
                  <button>Logout</button>
                </div> -->
                
            </div>

        </div>
    
    </nav>

     <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    
</header>

<?php

include "dbconn.php";

    $query = "SELECT * FROM post ";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_query_fetch_assoc($result) { 


?>



<!--Product Description-->

<section class="product-description">
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">

            <img src="dress/j.jpg" alt="">
        </div>
        <div class="col-2">
          <h2><?php echo $row['title']; ?></h2>
          <?php } ?>
          <p class="price"> <span>$73</p></span><br>
         <div>
            <select>
                <option value="Select Size" selected disabled>Select Size</option>
                <option value="1">S</option>
                <option value="2">M</option>
                <option value="3">L</option>
              
              </select>
         </div>
          <button class="product-btn">Buy Now</button><br>
          <h3>Details</h3><br>
          FEATURE DESIGN - Feminine Deep V neckline/ Simple Solid Color/
Cute Ruffle Cap Sleeveless Sleeve Design/ Classic A-Line Silhouette.
Knee Length <br/><br>

HUGS YOUR FIGURE PERFECTLY - The Women Summer Dress Offers
 Your Comfortable Relaxed Fit While The Dress Will Show Your
 Charming Neckline, Gorgeous Waist Line And The High Waist 
Design Will Visually Prolong Your Legs. This Women Casual 
Summer Dress Is With A Elegant Feminine Look And Hugs Your
 Curves Perfectly<br/><br>

FIT FOR ANY OCCASIONS - Women Vintage Dresses Could Be
 Dresses Up Or Down Depends On The Occasions: Great For 
Everyday Look, Leisure, Hang Out, Vacation, Weekend, BBQ
 Party, Beach If Combine This Soft Flowing Dress With A 
Sneakers Or Flats During The Day; If For Formal Places, 
Such As Business Work, Party, Church, Wedding, Wedding Guest,
 Prom, Evening, Teaching Clothes That You Can With Strappy 
Sandals And Delicate Jewelry<br/>
          </p>
            
        </div>
    </div>
    </div>











</section>

<section class="product-part">
    <div class="title"><h1>Product</h1></div>

    <div class="product-center container">
        
        <div class="product">
          <div class="img-cover">
            <img src="dress/s.jpg" alt="" />
          </div>
          <p>Halter</p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="price">$46</div>
        </div>
        <div class="product">
          <div class="img-cover">
            <img src="dress/Wrap-Dress.jpg" alt="" />
          </div>
          <p>Wrap-Dress</p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="price">$65</div>
        </div>
        <div class="product">
          <div class="img-cover">
            <img src="dress/p.jpg" alt="" />
          </div>
          <p>Blazer Type</p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="price">$55</div>
        </div>
        <div class="product">
          <div class="img-cover">
            <img src="dress/q.jpg" alt="" />
          </div>
          <p>Bell- Sleeve Dress</p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="price">$70</div>
        </div>
       
      </div>
</section>




    <!--Footer part-->
  <footer id="footer-part" class="section footer">
    <div class="footer-container">
        <div class="menu">
            <h3>Menu</h3>
            <ul class="menu-name">
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Service">Service</a></li>
                <li><a href="#Sell">Sell</a></li>
            </ul>
        </div>
        <div class="contact">
            <h3>Contacts</h3>
            <p><i class="fas fa-map-marker-alt"></i>Location</p>
            <p><i class="fas fa-phone-alt"></i>986694358</p>
            <p><i class="fas fa-envelope"></i><a href="mailto:abc@gmail.com">abc@gmail.com</a> </p>
        </div>
        <div class="social-media">
            <h3>Follow us on</h3>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-linkedin"></i>
        </div>
    </div>

    <div class="credit"> copyright @ 2021 by <span>Pasa designer</span> </div>


  </footer>



</body>
</html>