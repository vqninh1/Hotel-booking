<?php 
    require('config/db.php');
    if(isset($_POST['btnUpdate'])){
        $id_bt = $_POST['id_bt'];
        $name_bt = $_POST['name_bt'];
        $email_bt = $_POST['email_bt'];
        $phone_bt = $_POST['phone_bt'];
        $type_bt = $_POST['type_bt'];
        $person_bt = $_POST['person'];
        $date_bt = $_POST['date_bt'];
        $time_bt = $_POST['time_bt'];
    }
    $sql_1 = "UPDATE db_hotelbooking SET type_bt='$type_bt',person_bt='$person_bt',date_bt='$date_bt',time_bt='$time_bt' WHERE id_bt = '$id_bt'";
    if(mysqli_query($conn,$sql_1)){
        
    } 
    else {
        $result_1 = "Sửa thông tin chưa thành công" .mysqli_error($conn);
    }

?>