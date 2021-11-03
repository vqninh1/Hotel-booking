<?php
  session_start();
  if(!isset($_SESSION['login_oke'])){
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
	$id_bt = $_GET['id_bt'];
	$query = mysqli_query($conn, "SELECT * from db_bookingtable where id_bt='$id_bt'");
	$row = mysqli_fetch_assoc($query);
?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="rooms_update-process.php" class="contact100-form validate-form" method="POST">
				<span class="contact100-form-title">
					Sửa Thông Tin Đặt Bàn
				</span>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Mã Bàn</span>
					<input class="input100" type="text" name="id_bt" value="<?php echo $row['id_bt'];?>" readonly>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Tên Khách Hàng</span>
					<input class="input100" type="text" name="name_bt" value="<?php echo $row['name_bt'];?>" readonly>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email_bt" value="<?php echo $row['email_bt'];?>" readonly>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input">
					<span class="label-input100">Số Điện Thoại</span>           
					<input class="input100" type="text" name="phone_bt" value="<?php echo $row['phone_bt'];?>" readonly>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Chọn Bàn</span>                   
					<input class="input100" type="text" name="type_bt" value="<?php echo $row['type_bt'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Số Người</span>
					<input class="input100" type="text" name="person_bt" value="<?php echo $row['person_bt'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Ngày</span>
					<input class="input100" type="text" name="date_bt" value="<?php echo $row['date_bt'];?>" size="30">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Thời Gian</span>
					<input class="input100" type="text" name="time_bt" value="<?php echo $row['time_bt'];?>" size="30">
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

