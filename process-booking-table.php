<?php
    include('config/db.php');

$name_guest = $_POST['name_guest'];
$email_guest = $_POST['email_guest'];
$phone_guest = $_POST['phone_guest'];
$type_table = $_POST['type_table'];
$person = $_POST['person'];
$date = $_POST['date'];
$time = $_POST['time'];
$status_bt = "Đang xử lý";
$sql_1 = "SELECT * FROM db_bookingtable WHERE email_bt='$email_guest'";
$result_1 = mysqli_query($conn,$sql_1);

if (mysqli_num_rows($result_1) > 0){
    $value = 'existed';
    header("Location: booking-table.php?response=$value");
}else{
    $sql_2 = "INSERT INTO db_bookingtable(name_bt,email_bt,phone_bt,type_bt,person_bt,date_bt,time_bt,status_bt)
    VALUES ('$name_guest','$email_guest','$phone_guest','$type_table','$person','$date','$time','$status_bt')";
    $result_2 = mysqli_query($conn,$sql_2);

    if($result_2 > 0){
        $value = 'successfully';
        header("Location: booking-table.php?response=$value");
        
    }
}


