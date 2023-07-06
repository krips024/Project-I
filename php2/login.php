<?php
    include 'conn.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pword = $_POST['password'];

        $query1 = "select * from registration where email = ?";
        $stmt1 = $db -> prepare($query1);
        $stmt1 -> execute([$email]);
        if($stmt1 -> rowCount() > 0){  //email not found

            $query2 = "Select * from registration where email = ? and password = ?";
            $stmt2 = $db -> prepare($query2);
            $stmt2 -> execute([$email, $pword]);
            if($stmt2 -> rowCount() > 0){ //pword not found
                header('Location:../user.php');
            }else{
                header('Location:/PROJECT_PIXNEP/index.php?pnm=1');
            }
        }else{
            header("Location:/PROJECT_PIXNEP/index.php?enf=1");
        }



    }else{
        header('Location:/PROJECT_PIXNEP/index.php');
    }





?>