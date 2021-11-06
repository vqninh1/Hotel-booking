<?php
require ('./config/db.php');
if(isset($_REQUEST['id_service']) and $_REQUEST['id_service']!=""){
$id_service=$_GET['id_service'];
$sql = "DELETE FROM db_service WHERE id_service='$id_service'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}
    $conn->close();
}
header("Location:service.php");
?>