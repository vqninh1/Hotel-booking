<?php
  include('./header.php')

?>
    <!-- END nav -->
		<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang Chủ</a></span> <span><a href="rooms.php" >Nhà Hàng</a></span></p>
	            <h2 class="mb-4">Phòng</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php
		require('admin/config/db.php');
		$id_rm = $_GET['id_rm'];
		$sql="SELECT * from db_rooms where id_rm='$id_rm'";
		$query=mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
	?>
		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="room-img" style="background-image: url(./images/<?php echo $row['image_rm']; ?>);"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
          			<h2 class="mb-4"><?php echo $row['name_rm']?> <span>- (<?php echo $row['available_rm']?> Phòng Trống)</span></h2>
					  <?php echo $row['des_rm']?>
          		</div>
          		<div class="col-md-12 room-single ftco-animate mb-5 mt-4">
          			<h3 class="mb-4">Nổi Bật</h3>
					<ul>
						<li>Diện tích : <?php echo $row['area_rm']; ?></li>
						<li>Số Giường : <?php echo $row['bed_rm'];?></li>
						<li>Sức Chứa : <?php echo $row['capacity_rm'];?></li>
					</ul>
          		</div>

          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Nhận Xét &amp; Đánh Giá</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Đánh Giá</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Đánh Giá</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Đánh Giá</span></p>
									     </label>
										  </div>
										  <div class="form-check">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Đánh Giá</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Đánh Giá</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div>
          	</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Tìm Kiếm...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Bữa Ăn</a>
                <a href="#" class="tag-cloud-link">Thực Đơn</a>
                <a href="#" class="tag-cloud-link">Đồ Ăn</a>
                <a href="#" class="tag-cloud-link">Ngọt</a>
                <a href="#" class="tag-cloud-link">Ngon</a>
                <a href="#" class="tag-cloud-link">Tráng Miệng</a>
                <a href="#" class="tag-cloud-link">Đồ uống</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

  <?php include('footer.php')?>
    
  

  