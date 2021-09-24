

<?php
    session_start();

    if(!isset($_SESSION['username'])){
        include 'reglog.html';
    }
    else{
        echo "Buy";
    }
?>