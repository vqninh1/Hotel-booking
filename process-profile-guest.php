<?php

require('./config/db.php');

if (isset($_POST['btnSaveProfile'])) {
	$username_guest = $_POST['username_guest'];
	$fullname_guest      = $_POST['fullname_guest'];
	$email_guest = $_POST['email_guest'];
	$phone_guest = $_POST['phone_guest'];
	$address_guest = $_POST['address_guest'];
	$current_image = $_POST['current_image'];
	if(isset($_FILES['image']['name']))
    {
        $image_name = $_FILES['image']['name'];
        if($image_name!="")
        {
            $ext = explode('.', $image_name);
            $end = end($ext);
            $image_name = "profile-image".rand(0000,9999).'.'.$end; 
            $src_path = $_FILES['image']['tmp_name'];
            $dest_path = "images/".$image_name;
            $upload = move_uploaded_file($src_path, $dest_path);
        if($current_image!=""){
            $remove_path = "images/".$current_image;
        }}
        else
        {
            $image_name = $current_image; 
        }
    }
    else
    {
        $image_name = $current_image; 
    }
	}
$sql1 = "UPDATE db_users SET   fullname_guest='$fullname_guest'  , img_guest='$image_name' where id_guest='$id_guest'";
if (mysqli_query($conn, $sql1)) {
	header('Location: profile-guest.php');

} else {
	header('Location: profile-guest.php');
}
?>
