<?php
  session_start();
  if(!isset($_SESSION['login_oke'])){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="shortcut icon" href="./images/" />
  	<title>Quản Lý Đặt Phòng</title>

	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/booking-table.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>
<?php 
    require('config/db.php');
    $id_user = $_GET['id_user'];
    $query_1 = mysqli_query($conn , "SELECT * FROM db_admin WHERE id_user='$id_user'");
    $row = mysqli_fetch_assoc($query_1);
?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Sửa Thông Tin 
                                <br>Tài khoản admin</h1>
						</div>
						<form method="POST" class="form" enctype="multipart/form-data" >
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">ID</span>
                                        <input class="form-control" type="text" value="<?php echo $row['id_user']; ?>" name="id_user" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Tên tài khoản</span>
                                        <input class="form-control" type="text" value="<?php echo $row['name_user']; ?>" name="name_user" readonly>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Họ Tên</span>
                                <input class="form-control" type="text" value="<?php echo $row['fullname_user']; ?>" name="fullname_user">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" type="text" value="<?php echo $row['email_user']; ?>" name="email_user">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Số Điện Thoại</span>
                                <input class="form-control" type="text" value="<?php echo $row['phone']; ?>" name="phone">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Hình ảnh</span>
                                <img src="../images/<?php echo $row['img_admin']; ?>" width="150 px">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Hình ảnh mới</span>
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Địa chỉ</span>
                                <input class="form-control" type="text" value="<?php echo $row['address_user']; ?>" name="address_user">
                            </div>
                            
                            <div class="form-btn">
                                <button class="submit-btn" name="update-admin-table">Sửa</button>
                                <input type="hidden" name="current_image" id="current_image" value="<?php echo $row['img_admin']; ?>">
                            </div>
                            
                            <?php 
require('./config/db.php');

if(isset($_POST['update-admin-table'])){
    $id_user =$_POST['id_user'];
    $name_user= $_POST['name_user'];
    $fullname_user = $_POST['fullname_user'];
    $phone = $_POST['phone'];
    $email_user = $_POST['email_user'];
    $address_user = $_POST['address_user'];
    $current_image   =$_POST['current_image'];
    if(isset($_FILES['image']['name']))
    {
        $image_name = $_FILES['image']['name'];
        if($image_name!="")
        {
            $ext = explode('.', $image_name);
            $end = end($ext);
            $image_name = "admin-image".rand(0000,9999).'.'.$end; 
            $src_path = $_FILES['image']['tmp_name'];
            $dest_path = "../images/".$image_name;
            $upload = move_uploaded_file($src_path, $dest_path);
        if($current_image!=""){
            $remove_path = "../images/".$current_image;
            $remove = unlink($remove_path);
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
    


$sql = "UPDATE db_admin SET fullname_user='$fullname_user',phone = '$phone',img_admin='$image_name', email_user='$email_user',
                                 address_user ='$address_user'  WHERE id_user='$id_user'";
if (mysqli_query($conn, $sql)) {
    echo "<div class='text-danger'>Sửa thành công</div>";
}
else{
    $result="Cập nhật chưa thành công" .mysqli_error($conn);
}
}
?>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
