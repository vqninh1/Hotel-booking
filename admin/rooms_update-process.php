<?php 
require('./config/db.php');

if(isset($_POST['btnSave'])){
    $id_rm      =$_POST['id_rm'];
    $name_rm  =$_POST['name_rm'];
    $area_rm    =$_POST['area_rm'];
    $bed_rm     =$_POST['bed_rm'];
    $capacity_rm=$_POST['capacity_rm'];
    $des_rm    =$_POST['des_rm'];
    $current_image   =$_POST['current_image'];
    $available_rm=$_POST['available_rm'];
    $price_rm  =$_POST['price_rm'];
    if(isset($_FILES['image']['name']))
    {
        $image_name = $_FILES['image']['name'];
        if($image_name!="")
        {
            $ext = explode('.', $image_name);
            $end = end($ext);
            $image_name = "Room-image".rand(0000,9999).'.'.$end; 
            $src_path = $_FILES['image']['tmp_name'];
            $dest_path = "../images/".$image_name;
            $upload = move_uploaded_file($src_path, $dest_path);
        }
    }
    else
    {
        $image_name = $current_image; 
    }
    

}
$sql = "UPDATE db_rooms SET name_rm='$name_rm' , area_rm='$area_rm',bed_rm='$bed_rm' , capacity_rm='$capacity_rm' , des_rm='$des_rm' , image_rm='$image_name', available_rm='$available_rm' , price_rm='$price_rm' where id_rm='$id_rm'";
if(mysqli_query($conn,$sql))
{
    header('Location:room.php');
}
else{
    $result="Cập nhật chưa thành công" .mysqli_error($conn);
}
?>