<!DOCTYPE html>
<html>
<head>
 <title>Pasa</title>
 <link rel="stylesheet" href="index.css">
 <?php ?>

</head>

<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
 display: grid;
 grid-template-columns: repeat(4, 1fr);
}

.card{
     width: 80%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
     overflow: hidden;
     height:27rem;
 
  word-wrap: break-word;
  display:grid;
  place-items:center;
  margin-bottom: 50px;

    }

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

        <div class="image">
            <img src=" <?php  echo $result['image'];   ?> "/>
        </div>
        <div class="title">
            <?php  echo $result['title'];   ?> 
        </div>
        <div class='price'>
            <?php  echo $result['price'];   ?>
        </div>
        
     <!-- <button type="button"  id="<?php $id ?>">Add</button> -->
     <a href="p.php?id=<?php echo $id; ?>"> View More</a> 
    </div>
</form>

<?php
     }
    }
    ?>  




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
</body>
</html>
