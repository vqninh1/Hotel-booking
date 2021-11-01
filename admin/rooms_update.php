<?php
  session_start();
  if(!isset($_SESSION['login_ok'])){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sửa Phòng</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
	require('./config/db.php');
	$id_rm = $_GET['id_rm'];
	$query = mysqli_query($conn, "SELECT * from db_rooms where id_rm='$id_rm'");
	$row = mysqli_fetch_assoc($query);
?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="rooms_update-process.php" class="contact100-form validate-form" method="POST">
				<span class="contact100-form-title">
					Sửa Thông Tin Phòng
				</span>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Mã Phòng</span>
					<input class="input100" type="text" name="id_rm" value="<?php echo $row['id_rm'];?>" readonly>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Số Phòng</span>
					<input class="input100" type="text" name="number_rm" value="<?php echo $row['number_rm'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Loại Phòng</span>
					<input class="input100" type="text" name="type_rm" value="<?php echo $row['type_rm'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Diện Tích</span>
					<input class="input100" type="text" name="area_rm" value="<?php echo $row['area_rm'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Số Giường</span>
					<input class="input100" type="text" name="bed_rm" value="<?php echo $row['bed_rm'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Hướng Nhìn</span>
					<input class="input100" type="text" name="view_rm" value="<?php echo $row['view_rm'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Sức Chứa</span>
					<input class="input100" type="text" name="capacity_rm" value="<?php echo $row['capacity_rm'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Phòng Trống</span>
					<input class="input100" type="text" name="available_rm" value="<?php echo $row['available_rm'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Giá Tiền</span>
					<input class="input100" type="text" name="price_rm" value="<?php echo $row['price_rm'];?>" size="30">
					<span class="focus-input100"></span>
				</div>



				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="btnSave">
							<span>
								Sửa
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
</body>
</html>
