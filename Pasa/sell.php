<?php
   

        include 'dbconn.php';

        //getting all the submitted values
       if(isset($_POST['post'])){
       
        $title=$_POST['title'];
        $price=$_POST['price'];
      
        $detail=$_POST['detail'];
        $filename= $_FILES["image"]["name"];
        $tempname=$_FILES["image"]["tmp_name"];
        $folder="upload/".$filename;
        move_uploaded_file($tempname, $folder);
       

        $sql= "INSERT INTO post(title,price,detail,image) VALUES ('$title','$price','$detail','$folder')";

    
        $iquery = mysqli_query($conn, $sql);
    }
    else{
        echo "Not inserted";
    }

?>