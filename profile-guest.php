<?php session_start();
include('header.php')

?>

<div class="hero-wrap" style="background-image: url('./images/Khách-sạn-Hilton-Hà-Nội-Opera-4-1290x860.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
			<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
				<div class="text">
					<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang Chủ</a></span> <span>Tài Khoản</span></p>
					<h2 class="mb-4">Tài Khoản</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('config/db.php');
$id_guest = $_GET['id_guest'];
$query = mysqli_query($conn, "SELECT * from db_users where id_guest='$id_guest'");
$row= mysqli_fetch_assoc($query);

?>
<section class="ftco-section ftco-menu" style="background-image: url(images/restaurant-pattern.jpg);">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Thông Tin Tài Khoản</span>
				<h2 class="mb-4">Chỉnh Sửa Thông Tin</h2>

			</div>
		</div>
		<form method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="bg-white shadow rounded-lg d-block d-sm-flex">
					<div class="profile-tab-nav border-right">
						<div class="p-4">
							<div class="img-circle text-center mb-3">
								<img src="images/<?php echo $row['img_guest']; ?>" alt="Image" class="shadow">
							</div>
							<?php
							if (isset($_SESSION['login_oki'])) {
							?>

								<div class="nav-item">
									<a href="profile-guest.php?id_guest=<?php echo $row['id_guest']; ?>" class="nav-link">Tên người dùng: <?php echo   $_SESSION['login_oki']['username_guest']  ?></a>
								</div>
							<?php
							}
							?>
						</div>
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
								<i class="fa fa-home text-center mr-1"></i>
								Tài Khoản
							</a>

							<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="notification" aria-selected="false">
								<i class="fa fa-bell text-center mr-1"></i>
								Kiểm tra đơn đặt
							</a>
						</div>
					</div>
					<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
							<h3 class="mb-4">Chỉnh Sửa Tài Khoản</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Họ tên</label>
										<input type="text" class="form-control" name="fullname_guest" value="<?php echo $row['fullname_guest']; ?> " size="100">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Tên tài khoản</label>
										<input type="text" class="form-control" name="username_guest" value="<?php echo $row['username_guest']; ?>" readonly>
									</div>
								</div>								
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" name="email_guest" value="<?php echo $row['email_guest']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Số điện thoại</label>
										<input type="text" class="form-control" name="phone_guest" value="<?php echo $row['phone_guest']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Địa chỉ</label>
										<input type="text" class="form-control" name="address_guest" value="<?php echo $row['address_guest']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span>Hình ảnh</span>
										<img class="form-control" style="height: 200px !important;" src="images/<?php echo $row['img_guest']; ?>">
										<span>Chọn hình ảnh mới</span>
										<input type="file" name="image" id="image">
									</div>
								</div>
							</div>
							<div>
								<button class="btn btn-primary" name="btnSaveProfile">Cập nhật</button>
								<input type="hidden" name="current_image" id="current_image" value="<?php echo $row['img_guest']; ?>">
							</div>
						</div>
						<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
							<h3 class="mb-4">Kiểm tra đơn đã đặt</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="service" style="text-align:center">
											<h2 class="text-info">Các Dịch Vụ Đã Bàn Của Bạn</h2>
										</div>
										<table class="table">
											<thead>
												<tr>
													<th scope="col">STT</th>
													<th scope="col">Tên Khách Hàng</th>
													<th scope="col">Email</th>
													<th scope="col">Số Điện Thoại</th>
													<th scope="col">Bàn</th>
													<th scope="col">Số Người</th>
													<th scope="col">Ngày</th>
													<th scope="col">Thời Gian</th>
													<th scope="col">TTrạng Thái Xử Lí</th>
												</tr>
											</thead>
											<tbody>
												<?php
												require('admin/config/db.php');
												$sql2 = "SELECT name_bt,email_bt, phone_bt, type_bt,person_bt,date_bt,time_bt,status_bt FROM db_bookingtable where id_guest='$id_guest' ";
												$result2 = mysqli_query($conn, $sql2);
												if (mysqli_num_rows($result2) > 0) {
													$i = 1;
													while ($row2 = mysqli_fetch_assoc($result2)) {

												?>

														<tr>
															<th scope="row"><?php echo $i; ?> </th>
															<td><?php echo $row2['name_bt']; ?> </td>
															<td><?php echo $row2['email_bt']; ?> </td>
															<td><?php echo $row2['phone_bt']; ?> </td>
															<td><?php echo $row2['type_bt']; ?> </td>
															<td><?php echo $row2['person_bt']; ?> </td>
															<td><?php echo $row2['date_bt']; ?> </td>
															<td><?php echo $row2['time_bt']; ?> </td>
															<td><?php echo $row2['status_bt']; ?> </td>
														</tr>
												<?php
														$i++;
													}
												}
												?>
											</tbody>
											</table>
										<div class="booking-rooms" style="text-align:center">
											<h2 class="text-info">Các Phòng Ở Đã Đặt Của Bạn</h2>
										</div>
										<table class="table align-items-center table-flush table-borderless">
											<thead>
												<tr>
													<th scope="col">STT</th>
													<th scope="col">Tên Khách Hàng</th>
													<th scope="col">SĐT</th>
													<th scope="col">Email</th>
													<th scope="col">Thời Gian Nhận Phòng</th>
													<th scope="col">Thời Gian Trả Phòng</th>
													<th scope="col">Loại Phòng</th>
													<th scope="col">Giá (1 đêm)</th>
												</tr>
											</thead>
											<?php
											require('config/db.php');
											$sql3 = "SELECT * from db_check_room where id_guest='$id_guest'";
											$result3 = mysqli_query($conn, $sql3);
											if (mysqli_num_rows($result3) > 0) {
												$i = 1;
												while ($row3 = mysqli_fetch_assoc($result3)) {
											?>
													<tr>
														<th scope="row"><?php echo $i; ?> </th>
														<td><?php echo $row3['type_cr']; ?> </td>
														<td><?php echo $row3['price_cr']; ?> </td>
														<td><?php echo $row3['name_cr']; ?> </td>
														<td><?php echo $row3['phone_cr']; ?> </td>
														<td><?php echo $row3['email_cr']; ?> </td>
														<td><?php echo $row3['checkin_cr']; ?> </td>
														<td><?php echo $row3['checkout_cr']; ?> </td>
														<td><?php echo $row3['day_cr']; ?> </td>
														<td><?php echo $row3['total_price']; ?> </td>
														<td><?php echo $row3['status_cr']; ?> </td>
													</tr>
											<?php
													$i++;
												}
											}
											?>
										</table>

									</div>
									<div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

		</form>
</section>
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

$sql1 = "UPDATE db_users SET fullname_guest='$fullname_guest'  , img_guest='$image_name' where id_guest='$id_guest'";
if (mysqli_query($conn, $sql1)) {
	

} else {
	
}
}
?>




<?php
include('footer.php')
?>