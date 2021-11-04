<?php 
    session_start();
    if(isset($_SESSION['login_oke'])){
        unset($_SESSION['login_oke']);
        header("Location:login.php");
    }
?> 