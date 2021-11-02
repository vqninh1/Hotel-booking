<?php
     session_start();
     require('config/db.php');
     $username_guest = $_POST['username_guest'];
     $password_guest = $_POST['password_guest'];
 
     $sql_1 = "SELECT * from db_users where username_guest = '$username_guest'";
     $result_1 = mysqli_query($conn, $sql_1);
 
     if (mysqli_num_rows($result_1)>0){
        $row=mysqli_fetch_assoc($result_1);
        $pass_saved = $row['password_guest'];
 
        if(password_verify($password_guest, $pass_saved)){
            $_SESSION['login_ok']=$row;
            header("Location:index.php");
            
        }else{
         $response = 'failed_pass';
         header("Location: login.php?response=$response");
        }
     }else{
         $response = 'failed_user';
         header("Location: login.php?response=$response");
     }
