<?php
    require('config/db.php');
    if(isset($_REQUEST['id_bt']) and $_REQUEST['id_bt']!=""){
        $id_bt = $_GET['id_bt'];
        $sql = "DELETE FROM db_bookingtable WHERE id_bt='$id_ht'";
        if($conn -> query($sql) == TRUE) {
            echo "Hủy Thành Công!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn -> close();

    }
    header("Location: booking-table.php");



?>