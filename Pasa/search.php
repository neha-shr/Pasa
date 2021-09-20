<?php

    include 'dbconn.php';

    if(isset($_POST['search'])){
        $search =mysqli_real_escape_string($conn, $_POST['searchbox']);

        $search_query = "select * from 'search' where s_name LIKE '%$search%' or s_description like '%$search%'";
        $query = mysqli_query($conn,$search_query);

        $search_count = mysqli_num_rows($query);

        echo "There are ".$search_count." results";

        if($search_count){
            while($search_fetch = mysqli_fetch_assoc($query)){
                echo "<h3>Here is your result</h3>";
            }
        }
        else{
            echo "There are no result matching your search";
        }
    }


?>