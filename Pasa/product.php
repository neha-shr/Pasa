<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Pasa</title>

    
=======
 <title>Pasa</title>
 <link rel="stylesheet" href="index.css">
 <?php ?>
>>>>>>> 72e42377568705d499a6a2f776e45374f1c88594

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
                            <a href="main.html" class="nav-link">Home</a>
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

<<<<<<< HEAD
        


   
<!-- Product -->
<section class="product-part">
    <div class="title"><h1>Product</h1></div>
=======
.image img{
  width: 100px;
  height:200px;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }
 .price{
    text-align: center;
  padding: 5px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;

}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}
 
</style>
<body>


<header class="header">
        <nav class="nav container">
            
            <div class="navigation flex-d">
                    
                <!--Logo-->
                <div class="logo">
                   <!-- <h2>Pasa</h2> -->
                   <img src="icons/logo.png" alt="Logo"/>
                </div>

                <!--Menu bar-->
                <div class="menu">
    
                    <ul class="nav-list flex-d">
    
                        <li class="nav-item">
                            <a href="main.html" class="nav-link">Home</a>
                        </li>
                        
                        <li class="nav-item">
                          <a href="product.html" class="nav-link active">Product</a>
                      </li>
                        <!-- <li class="nav-item">
                            <a href="#service" class="nav-link">Service</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="sell.html" class="nav-link">Sell</a>
                        </li>
                
                    </ul>
                </div>

       
              <div class="flex-d logout">
                <button type="submit" name="logout"><a href="logout.php">Logout</a></button>
            </div>

    
            </div>
        
        </nav>

</header>



>>>>>>> 72e42377568705d499a6a2f776e45374f1c88594
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



<<<<<<< HEAD
=======
</div>




    <!--Footer part-->
    <footer id="footer-part" class="section footer">
    <div class="footer-container">
        <div class="menu">
            <h3>Menu</h3>
            <ul class="menu-name">
                <li><a href="main.html">Home</a></li>
              
                <li><a href="product.php">Product</a></li>
                <li><a href="sell.html">Sell</a></li>
            </ul>
        </div>
        <div class="contact">
            <h3>Contacts</h3>
            <p> <img src="icons/search-location-solid.svg" alt=""> Location:Lalitpur</p>
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
>>>>>>> 72e42377568705d499a6a2f776e45374f1c88594
</body>

</html>
