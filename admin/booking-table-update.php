<?php
  session_start();
  if(!isset($_SESSION['login_ok'])){
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
  	<title>Quản Lý Đặt Bàn</title>

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
    $id_bt = $_GET['id_bt'];
    $query_1 = mysqli_query($conn , "SELECT * FROM db_bookingtable WHERE id_bt ='$id_bt'");
    $row = mysqli_fetch_assoc($query_1);

?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Sửa Thông Tin</h1>
						</div>
						<form action="process-booking-table-update.php" method="POST" >
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">ID</span>
                                        <input class="form-control" type="text" name="id_bt" value="<?php echo $row['id_bt'];?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Họ Tên</span>
                                        <input class="form-control" type="email" name="name_bt" value="<?php echo $row['name_bt'];?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" type="text" name="email_bt" value="<?php echo $row['email_bt'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Số Điện Thoại</span>
                                <input class="form-control" type="tel" name="phone_bt" value="<?php echo $row['phone_bt'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Chọn Bàn</span>
                                <select class="form-control" name="type_bt">
                                    <option value="<?php echo $row['type_bt'];?>">Bàn Thường</option>
                                    <option value="<?php echo $row['type_bt'];?>">Bàn Giản Dị</option>
                                    <option value="<?php echo $row['type_bt'];?>">Bàn Cao Cấp</option>
                                    <option value="<?php echo $row['type_bt'];?>">Bàn Siêu Cấp</option>
                                    <option value="<?php echo $row['type_bt'];?>">Bàn Vip Pro</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Chọn Số Người</span>
                                <select class="form-control" name="person_bt">
                                    <option value="<?php echo $row['person_bt'];?>">1</option>
                                    <option value="<?php echo $row['person_bt'];?>">2</option>
                                    <option value="<?php echo $row['person_bt'];?>">3</option>
                                    <option value="<?php echo $row['person_bt'];?>">4</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Chọn Ngày</span>
                                        <input class="form-control" type="date" name="date_bt" value="<?php echo $row['date_bt']; ?>">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Chọn Thời Gian</span>
                                        <input class="form-control" type="time" name="time_bt" value="<?php echo $row['time_bt']; ?>">
                                    </div>
                                </div>
                                
                                        
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn" name="btnUpdate">Sửa</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

