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
  	<title>Thêm Phòng</title>

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
							<h1>Thêm Phòng</h1>
						</div>
						<form action="rooms_add-process.php" class="text-dark" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <span class="form-label">Tên Phòng</span>
                                <input class="form-control" type="text" name="name_rm" id="name_rm">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Diện Tích</span>
                                <input class="form-control" type="text" name="area_rm" id="area_rm">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Sức Chứa</span>
                                <input class="form-control" type="text" name="capacity_rm" id="capacity_rm">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Mô Tả</span>
                                <textarea class="form-control" type="text" name="des_rm" id="des_rm" style="height:200px;"></textarea>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Hình Ảnh </span>
                                <input class="text-danger" type="file" name="image_rm" id="image_rm">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phòng Trống</span>
                                <input class="form-control" type="text" name="available_rm" id="available_rm">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Giá Tiền</span>
                                <input class="form-control" type="text" name="price_rm" id="price_rm">
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn" name="btnAdd">Thêm</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

