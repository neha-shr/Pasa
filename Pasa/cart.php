<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasa</title>

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
                   <img src="icons/logo.png" alt=""/>
                </div>

                <!--Menu bar-->
                <div class="menu">
    
                    <div class="top">
                        <span class="close">Close <i class="bx bx-x"></i></span>
                    </div>
    
                    <ul class="nav-list d-flex">
    
                        <li class="nav-item active">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li> -->
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

  

    <section class="small-container cart">


        <table>
            <tr>
                <th id="imgs">Images</th>
                <th id="pds">Product</th>
                <th id="ps">price</th>
            </tr>
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

            <tr>

                <td>
                    <div class="cart-info">


                        <img src=" <?php  echo $result['image'];?>" alt="Product image">
                    </div>

                </td>
                <td><?php echo $result['title']; ?></td>
                <td><?php echo $result['price'];  ?></td>
            </tr>
            <tr>
                <th colspan= 2>Total:</th>
                <th> <?php echo $result['price'] ?></th>
            </tr>
        </table>
        <h3 class="thanks">Thanks for Shopping</h3>
    </section>








</body>
</html>