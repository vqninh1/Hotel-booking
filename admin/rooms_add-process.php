<?php
  if(isset($_POST['btnAdd'])){
    $name_rm  =$_POST['name_rm'];
    $area_rm    =$_POST['area_rm'];
    $bed_rm     =$_POST['bed_rm'];
    $capacity_rm=$_POST['capacity_rm'];
    $des_rm    =$_POST['des_rm'];
    $available_rm=$_POST['available_rm'];
    $price_rm  =$_POST['price_rm'];
    if(isset($_FILES['image_rm']['name']))
    {
        $image_name = $_FILES['image_rm']['name'];
        if($image_name!="")
        {
            $ext = end(explode('.', $image_name));
            $image_name = "Room-image".rand(0000,9999).".".$ext; 
            $src = $_FILES['image_rm']['tmp_name'];
            $dst = "../images/".$image_name;
            $upload = move_uploaded_file($src, $dst);
        }
    }
    else
    {
        $image_name = "";
    }
    require('./config/db.php');
    $sql ="INSERT INTO db_rooms(name_rm,area_rm,bed_rm,capacity_rm,des_rm,image_rm,available_rm,price_rm) VALUES('$name_rm','$area_rm','$bed_rm','$capacity_rm','$des_rm','$image_name','$available_rm','$price_rm')";

    if(mysqli_query($conn,$sql)==TRUE){
        echo "Thêm thành công";
        header("Location:room.php");
    }else{
        echo "Chưa thêm được .....";
    }
    
    mysqli_close($conn);
    } 
?>