<?php

    include 'dbconn.php';

    session_start();
    
        if(isset($_POST['signin'])){

            $email = $_POST['email'];
            $password= $_POST['password'];

            $email_search = "select * from signup where email= '$email' ";
            $query = mysqli_query($conn,$email_search);

            $email_count = mysqli_num_rows($query);

            if($email_count){
                $email_pass = mysqli_fetch_assoc($query);

                $pass = $email_pass['password'];
                
                $_SESSION['username'] = $email_pass['username'];

                $password_decode = password_verify($password, $pass);

                if($password_decode){
                    echo "login successful";
                   include 'main.html';
                }else{
                    echo "Password Incorrect";
                }
            }else{
                echo "Invalid Email";
            }

        }



?>