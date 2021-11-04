<?php
include('./config/db.php');

$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$phonenumber = $_POST['phonenumber'];
$address_user = $_POST['address_user'];
$str=rand();
$sql_1 = "SELECT * from db_admin where email_user = '$email'";
$result_1 = mysqli_query($conn, $sql_1);

if (mysqli_num_rows($result_1)>0){
    $value ='existed';
    header("Location: register.php?response=$value");
} else {
    $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
    $sql_2 = "insert into db_admin(name_user, password_user, email_user, phone, address) 
    values ('$username','$pass_hash','$email','$phonenumber','$address_user')";
    $result_2 = mysqli_query($conn, $sql_2);

    if ($result_2 > 0) {
        $value = 'successfully';
        header("Location: register.php?response=$value");
    }
}