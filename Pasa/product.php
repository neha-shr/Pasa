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
</body>
</html>
