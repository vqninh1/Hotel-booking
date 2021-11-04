<?php
session_start();
if(isset($_SESSION['login_oki'])){
    unset($_SESSION['login_oki']);
    header("Location: index.php");
}
?>