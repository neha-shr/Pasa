<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php ?>
        <?php ?>
</head>
<body>
    
<div class="container">
    <div class="row d-flex justify-content-centre">
        <div class="col-lg-11 col-12">
            <div class="table-responsive">
                <table class="table-striped text-center table-bordered text-white">
                    <thead class="bg-dark text-white">
                    <tr>
                        <th class="py-3 text-white">id</th>
                        <th class="py-3 text-white">title</th>    
                        <th class="py-3 text-white">price</th>
                        <th class="py-3 text-white">details</th>
                        <th class="py-3 text-white">photo</th>
             
                    </tr>
                    </thead>
                    <tbody>
                           <?php

                                include "dbconn.php";
                                $selectquery = "select * from post";
                                $query = mysqli_query($conn, $selectquery);

                                $result = mysqli_fetch_array($query);
                                while($result = mysqli_fetch_array($query)){
                                ?>

                                <tr>
                                    <td> <?php  echo $result['id'];   ?>  </td>
                                    <td> <?php  echo $result['title'];   ?>  </td>
                                    <td> <?php  echo $result['price'];   ?>  </td>
                                    <td> <?php  echo $result['detail'];   ?>  </td>
                                    <td><img src=" <?php  echo $result['image'];   ?> "/> </td>
                                    <td><button name = 'buy' id='buy'>BUY</button>
                                    </tr>



<?php


                                }


                                



                           ?>

                    </tbody>



                </table>
            </div>
        <div>
    <div>
<div>
</body>
</html>
