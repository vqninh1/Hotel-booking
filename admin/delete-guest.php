<?php
require ('./config/db.php');
if(isset($_REQUEST['id_guest']) and $_REQUEST['id_guest']!=""){
$id_guest=$_GET['id_guest'];
$sql = "DELETE FROM db_users WHERE id_guest='$id_guest'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
header("Location:index.php");
?>