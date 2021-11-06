<?php 
require('./config/db.php');

if(isset($_POST['btnSave'])){
    $id_service=$_POST['id_service'];
    $name_ser  =$_POST['name_ser'];
    $des_ser   =$_POST['des_ser'];
}
$sql = "UPDATE db_service SET name_ser='$name_ser' , des_ser='$des_ser' where id_service='$id_service'";
if(mysqli_query($conn,$sql))
{
    header('Location:service.php');
}
else{
    $result="Cập nhật chưa thành công" .mysqli_error($conn);
}
?>