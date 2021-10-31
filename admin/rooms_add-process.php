<?php
  if(isset($_POST['btnAdd'])){
    $number_rm  =$_POST['number_rm'];
    $type_rm    =$_POST['type_rm'];
    $area_rm    =$_POST['area_rm'];
    $bed_rm     =$_POST['bed_rm'];
    $view_rm    =$_POST['view_rm'];
    $capacity_rm=$_POST['capacity_rm'];
    $available_rm=$_POST['available_rm'];
    $refund_rm  =$_POST['refund_rm'];
    require('./config/db.php');
    $sql ="INSERT INTO db_rooms(number_rm,type_rm,area_rm,bed_rm,view_rm,capacity_rm,available_rm,refund_rm) VALUES('$number_rm','$type_rm','$area_rm','$bed_rm','$view_rm','$capacity_rm','$available_rm','$refund_rm')";
    if(mysqli_query($conn,$sql)==TRUE){
        echo "Thêm thành công";
        header("Location:room.php");
    }else{
        echo "Chưa thêm được .....";
    }
    mysqli_close($conn);
    } 
    
?>