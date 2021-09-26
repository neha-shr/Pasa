<?php

session_start();
include 'dbconn.php';

if(isset($_POST['signup'])){

    $username= mysqli_real_escape_string($conn, $_POST['txt']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword= mysqli_real_escape_string($conn, $_POST['cpass']);
    $mobileno= mysqli_real_escape_string($conn, $_POST['phone']);
}

    $pass =password_hash($password, PASSWORD_BCRYPT);
    $cpass =password_hash($cpassword, PASSWORD_BCRYPT);

    $emailQuery = "select * From signup where email='$email' ";
    $query= mysqli_query($conn, $emailQuery);

    $emailcount = mysqli_num_rows ($query);

    if($emailcount>0){
        echo "email already exists";
    }else{
        if($password == $cpassword){
            
            $insertquery ="insert into signup(username, email, password, cpassword, mobileno) values('$username','$email','$pass','$cpass','$mobileno')";

            $iquery = mysqli_query($conn, $insertquery);
            if($iquery){
                ?>
                <script>
                    alert("Connection Successful");
                </script>
                <?php
                // include 'main.html';
                header("location:main.html");
            }
            else{
                ?>
                <script>
                    alert("Not Connected");
                </script>
                <?php
            }
        

        }
        else{
            echo"Password not Matching";
        }
    }

?>