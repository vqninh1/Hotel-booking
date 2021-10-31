<?php
require ('./config/db.php');
if(isset($_REQUEST['id_rm']) and $_REQUEST['id_rm']!=""){
$id_rm=$_GET['id_rm'];
$sql = "DELETE FROM db_rooms WHERE id_rm='$id_rm'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
header("Location:room.php");
?>