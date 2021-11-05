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

	<link rel="shortcut icon" href="./images/Khách-sạn-Hilton-Hà-Nội-Opera-2-1290x860.jpg" />
  	<title>Quản Lý Đặt Phòng</title>

	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="./css/booking-table.css" />

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
    $id_cr = $_GET['id_cr'];
    $query_1 = mysqli_query($conn , "SELECT * FROM db_check_room WHERE id_cr ='$id_cr'");
    $row = mysqli_fetch_assoc($query_1);
        
?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Sửa Thông Tin 
                                <br>Đặt phòng</h1>
						</div>
						<form method="POST" class="form" >
                            <div class="form-group">
                                <span class="form-label">Mã đơn đặt</span>
                                <input class="form-control" type="text" value="<?php echo $row['id_cr']; ?>" name="id_cr" readonly>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Mã Khách</span>
                                <input class="form-control" type="text" value="<?php echo $row['id_guest']; ?>" name="id_guest" readonly>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Mã Phòng</span>
                                <input class="form-control" type="text" value="<?php echo $row['id_rm']; ?>" name="id_rm" readonly>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Loại phòng</span>
                                        <input class="form-control" type="text" value="<?php echo $row['type_cr']; ?>" name="type_cr">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Giá Phòng</span>
                                        <input class="form-control" type="text" value="<?php echo $row['price_cr']; ?>" name="price_cr">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Họ Tên</span>
                                <input class="form-control" type="text" value="<?php echo $row['name_cr']; ?>" name="name_cr">
                            </div>
                            
                            <div class="form-group">
                                <span class="form-label">Số Điện Thoại</span>
                                <input class="form-control" type="text" value="<?php echo $row['phone_cr']; ?>" name="phone_cr">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" type="text" value="<?php echo $row['email_cr']; ?>" name="email_cr">
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Check-in</span>
                                        <input class="form-control" type="date" value="<?php echo $row['checkin_cr']; ?>" name="checkin_cr">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Check-out</span>
                                        <input class="form-control" type="date" value="<?php echo $row['checkout_cr']; ?>" name="checkout_cr">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Tình trạng</span>
                                <input class="form-control" type="text" value="<?php echo $row['status_cr']; ?>" name="status_cr">
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn" name="update-cr">Sửa</button>
                            </div>
                            <?php
                            if (isset($_POST['update-cr'])) {
                                $id_cr= $_POST['id_cr'];
                                $name_cr = $_POST['name_cr'];
                                $phone_cr = $_POST['phone_cr'];
                                $email_cr = $_POST['email_cr'];
                                $checkin_cr = $_POST['checkin_cr'];
                                $checkout_cr = $_POST['checkout_cr'];
                                $type_cr = $_POST['type_cr'];
                                $price_cr = $_POST['price_cr'];
                                $day1 = strtotime($checkin_cr);
                                $day2 = strtotime($checkout_cr);
                                $sec =$day2 - $day1;
                                $day_cr = $sec/86400;
                                $total_price = ((int)$price_cr * (int)$day_cr);
                                $status_cr = $_POST['status_cr'];
                                // Create connection
                                $conn = new mysqli("localhost", "root", "", "hotel-booking");
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Lỗi kết nối " . $conn->connect_error);
                                }

                                $sql = "UPDATE db_check_room SET name_cr='$name_cr',phone_cr = '$phone_cr', email_cr='$email_cr', checkin_cr='$checkin_cr' , 
                                checkout_cr='$checkout_cr', type_cr='$type_cr', price_cr='$price_cr',day_cr='$day_cr', total_price='$total_price' , status_cr='$status_cr' WHERE id_cr='$id_cr'";

                                if ($conn->query($sql) === TRUE) {
                                    echo "<div class='text-danger'>Sửa thành công</div>";
                                    
                                } else {
                                    echo "Sửa không thành công " . $conn->error;
                                }
                                $conn->close();
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