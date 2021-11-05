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

	<link rel="shortcut icon" href="images/Khách-sạn-Hilton-Hà-Nội-Opera-2-1290x860.jpg" />
  	<title>Sửa Phòng</title>

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
  require('./config/db.php');
  $id_rm = $_GET['id_rm'];
  $query = mysqli_query($conn, "SELECT * from db_rooms where id_rm='$id_rm'");
  $row = mysqli_fetch_assoc($query);
?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Sửa Thông Tin</h1>
						</div>
						<form action="rooms_update-process.php" class="text-dark" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Mã Phòng</span>
                                        <input class="form-control" type="text" name="id_rm" value="<?php echo $row['id_rm'];?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Tên Phòng</span>
                                        <input class="form-control" type="text" name="name_rm" value="<?php echo $row['name_rm'];?>" size="30">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Diện Tích</span>
                                <input class="form-control" type="text" name="area_rm" value="<?php echo $row['area_rm'];?>" size="30">
                            </div>                           
                            <div class="form-group">
                                <span class="form-label">Sức Chứa</span>
                                <input class="form-control" type="text" name="capacity_rm" value="<?php echo $row['capacity_rm'];?>" size="30">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Mô Tả</span>
                                <textarea class="form-control" type="text" name="des_rm" style="height:200px;"><?php echo $row['des_rm'];?></textarea>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Hình Ảnh</span>
                                <img src="../images/<?php echo $row['image_rm']; ?>" width="150 px">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Chọn Hình Ảnh Mới</span>
                                <input class="text-danger" type="file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phòng Trống</span>
                                <input class="form-control" type="text" name="available_rm" value="<?php echo $row['available_rm'];?>" size="30">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Giá Tiền</span>
                                <input class="form-control" type="text" name="price_rm" value="<?php echo $row['price_rm'];?>" size="30">
                            </div>
                            <div class="form-btn">
                                <input type="hidden" name="current_image" id="current_image" value="<?php echo $row['image_rm']; ?>">   
                                <button class="submit-btn" name="btnSave">Sửa</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

