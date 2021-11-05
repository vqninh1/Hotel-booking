<?php
require('admin/config/db.php');
if(isset($_POST['btnBooking'])){
$id_guest=$_POST['id_guest'];
$name_guest = $_POST['name_guest'];
$email_guest = $_POST['email_guest'];
$phone_guest = $_POST['phone_guest'];
$type_table = $_POST['type_table'];
$person = $_POST['person'];
$date = $_POST['date'];
$time = $_POST['time'];
$status_bt = "Đang xử lý";
$sql_1 = "SELECT * FROM db_users WHERE id_guest=$id_guest;";
$result_1 = mysqli_query($conn,$sql_1);
$sql_2 = "INSERT INTO db_bookingtable(id_guest,name_bt,email_bt,phone_bt,type_bt,person_bt,date_bt,time_bt,status_bt)
VALUES ('$id_guest','$name_guest','$email_guest','$phone_guest','$type_table','$person','$date','$time','$status_bt')";
if(mysqli_query($conn,$sql_2)){
    $value="successfully";
    header("location:booking-table.php?response=$value");
}
}