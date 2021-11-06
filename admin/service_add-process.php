<?php
  if(isset($_POST['btnAdd'])){
    $name_ser  =$_POST['name_ser'];
    $des_ser   =$_POST['des_ser'];
    require('./config/db.php');
    $sql ="INSERT INTO db_service(name_ser,des_ser) VALUES('$name_ser','$des_ser')";

    if(mysqli_query($conn,$sql)==TRUE){
        echo "Thêm thành công";
        header("Location:service.php");
    }else{
        echo "Chưa thêm được .....";
    }
    
    mysqli_close($conn);
    } 
?>