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
>>>>>>> cb5ba91fb5cc27fe9565c216521c0d129bbf0163
