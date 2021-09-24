<?php
include "dbconn.php";

if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])) {
    $errors[] = 'You must select a product in order to see its details!';
} else {
    $productId = $_GET['id'];

    /*
     * Get the product details.
     */
    $sql = 'SELECT * 
            FROM products 
            WHERE id = ? 
            LIMIT 1';

    $statement = $connection->prepare($sql);

    $statement->bind_param('i', $productId);

    $statement->execute();

    $result = $statement->get_result();
    $products = $result->fetch_all(MYSQLI_ASSOC);

    $result->close();

    $statement->close();

    if (!$products) {
        $errors[] = 'No product found.';
    } else {
        $product = $products[0];

        $productName = $product['title'];
        $productprice = $product['price'];
        $productDescription = $product['detail'];
      ?>



<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<!--Product Description-->

<section class="product-description">
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">

            <img src="dress/j.jpg" alt="">
        </div>
        <div class="col-2">
          <h2><?php echo $productName; ?></h2>
         
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
</body>
</html>
