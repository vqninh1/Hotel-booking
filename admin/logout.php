<<<<<<< HEAD
<?php 
    session_start();
    if(isset($_SESSION['login_ok'])){
        unset($_SESSION['login_ok']);
        header("Location:login.php");
    }
?> 
=======
<?php
session_start();
if(isset($_SESSION['login_ok'])){
    unset($_SESSION['login_ok']);
    header("Location:login.php");
}
?>
>>>>>>> quang-ninh
