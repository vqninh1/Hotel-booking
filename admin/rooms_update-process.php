<?php 
require('./config/db.php');
if(isset($_POST['btnSave'])){
    $id_rm      =$_POST['id_rm'];
    $number_rm  =$_POST['number_rm'];
    $type_rm    =$_POST['type_rm'];
    $area_rm    =$_POST['area_rm'];
    $bed_rm     =$_POST['bed_rm'];
    $view_rm    =$_POST['view_rm'];
    $capacity_rm=$_POST['capacity_rm'];
    $available_rm=$_POST['available_rm'];
    $refund_rm  =$_POST['refund_rm'];
}
$sql = "UPDATE db_rooms SET number_rm='$number_rm',type_rm='$type_rm' , area_rm='$area_rm',bed_rm='$bed_rm' , view_rm='$view_rm', capacity_rm='$capacity_rm' , available_rm='$available_rm' , refund_rm='$refund_rm' where id_rm='$id_rm'";
if(mysqli_query($conn,$sql))
{
    header('Location:room.php');
}
else{
    $result="Cập nhật chưa thành công" .mysqli_error($conn);
}
?>