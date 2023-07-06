<?php

include 'dbcon.php';
require_once 'conn.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    // $mobile = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    
    $emailquery = "select * from registration where email = ?";
    $stmt = $db ->prepare($emailquery);
    $stmt -> execute([$email]);
    $emailcount = $stmt -> rowCount();

    // echo $emailcount;

    if($emailcount>0){
        echo "email already exists";
    }else{
        if($password === $cpassword){
            
            $insertquery = "insert into registration(username, email, password, cpassword) values ('$username','$email','$password','$cpassword')";

            $stmt2 = $db ->prepare($insertquery);
            $stmt2 -> execute();
            if($stmt2){
                ?>
                    <script>
                        // alert("Inserted Successful");
                    </script>
                <?php    
            }else{
                ?>
                    <script>
                        // alert("No Inserted");
                    </script>
                <?php
            }
        }else{
            echo "password are not matching";
        }
    }

}

?>