<?php
include('config/db.php');

$fullname_guest = $_POST['fullname_guest'];
$username_guest = $_POST['username_guest'];
$email_guest = $_POST['email_guest'];
$pass1_guest = $_POST['pass1_guest'];
$pass2_guest = $_POST['pass2_guest'];
$phone_guest = $_POST['phone_guest'];
$address_guest = $_POST['address_guest'];
$str=rand();
$sql_1 = "SELECT * from db_users where email_guest = '$email_guest'";
$result_1 = mysqli_query($conn, $sql_1);

if (mysqli_num_rows($result_1)>0){
    $value ='existed';
    header("Location: register.php?response=$value");
} else {
    $pass_hash = password_hash($pass1_guest, PASSWORD_DEFAULT);
    $sql_2 = "INSERT into db_users(username_guest,fullname_guest, password_guest, email_guest, phone_guest, address_guest,img_guest) 
    values ('$username_guest','$fullname_guest','$pass_hash','$email_guest','$phone_guest','$address_guest','hoanglong.png')";
    $result_2 = mysqli_query($conn, $sql_2);

    if ($result_2 > 0) {
        $value = 'successfully';
        header("Location: register.php?response=$value");
    }
}