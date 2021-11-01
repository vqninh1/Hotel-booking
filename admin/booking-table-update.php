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
  	<title>Quản lý tài khoản</title>

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
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Sửa Thông Tin</h1>
						</div>
						<form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Họ Tên</span>
                                        <input class="form-control" type="text" placeholder="Nhập tên">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <input class="form-control" type="email" placeholder="Nhập email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Số Điện Thoại</span>
                                <input class="form-control" type="tel" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Chọn Bàn</span>
                                <select class="form-control">
                                    <option>Bàn Thường</option>
                                    <option>Bàn Giản Dị</option>
                                    <option>Bàn Cao Cấp</option>
                                    <option>Bàn Siêu Cấp</option>
                                    <option>Bàn Vip Pro</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Chọn Số Người</span>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Chọn Ngày</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Chọn Thời Gian</span>
                                        <input class="form-control" type="time" required>
                                    </div>
                                </div>
                                
                                        
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Sửa</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

