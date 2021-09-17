<?php

    $server ="localhost";
    $user ="root";
    $password="";
    $db="pasa";

    $conn = mysqli_connect($server, $user, $password, $db);

    if($conn){
        ?>
        <script>
            alert("Connection Successful");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Not Connected");
        </script>
        <?php
    }

?>