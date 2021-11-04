<?php
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

<section class="ftco-section ftco-menu" style="background-image: url(images/restaurant-pattern.jpg);">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Thông Tin Tài Khoản</span>
				<h2 class="mb-4">Chỉnh Sửa Thông Tin</h2>

			</div>
		</div>
		<div class="row">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="images/hoanglong" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">Kiran Acharya</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i>
							Tài Khoản
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i>
							Ảnh đại diện
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Chỉnh Sửa Tài Khoản</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Họ</label>
									<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Tên</label>
									<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Số điện thoại</label>
									<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Đại chỉ</label>
									<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Designation</label>
									<input type="text" class="form-control" value="">
								</div>
							</div>

						</div>
						<div>
							<button class="btn btn-primary">Cập nhật</button>
							<button class="btn btn-light">Hủy</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Chỉnh sửa a</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Old password</label>
									<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>New password</label>
									<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Confirm new password</label>
									<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>



<?php
include('footer.php')
?>