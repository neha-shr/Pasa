<!DOCTYPE html>
<html>
<head>
 <title></title>
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
 display: flex;
 justify-content: center;
}

.card{
     width: 30%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
     overflow: hidden;
 
  word-wrap: break-word;

    }

.image img{
  width: 100%;
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
  justify-content: center;
  
  vertical-align: middle;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}
 
</style>
<body>

<?php

    include "dbconn.php";
    $selectquery = "select * from post";
    $query = mysqli_query($conn, $selectquery);
    $result = mysqli_fetch_array($query);
    while($result = mysqli_fetch_array($query)){
?>

<div class="main">
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
        <div class="des">
            <?php  echo $result['detail'];   ?>
 
        
        </div>
        <button name ='buy' id='buy'>BUY</button>
    </div>
</div>
  
<?php
    }
?>




</body>
</html>
