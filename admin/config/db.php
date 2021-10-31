<?php
$conn = mysqli_connect('localhost','root','','hotel-booking');
if(!$conn){
    die("Không thể kết nối,kiểm tra lại các tham số kết nối");
}
else{
    echo ("Ket noi thanh cong");
}
?>