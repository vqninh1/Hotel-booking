<?php
    session_start();
    require('./config/db.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_1 = "SELECT * from db_users where name_user = '$username'";
    $result_1 = mysqli_query($conn, $sql_1);

    if (mysqli_num_rows($result_1)>0){
       $row=mysqli_fetch_assoc($result_1);
       //$pass_saved = $row['password_user'];
       
       if($password==$row['password_user']){
           $_SESSION['login_ok']=$username;
           header("Location:index.php");
       }else{
        $response = 'failed_pass';
        header("Location: login.php?response=$response");
       }
    }else{
        $response = 'failed_user';
        header("Location: login.php?response=$response");
    }
?>