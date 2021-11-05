<?php session_start();
	include('header.php')

?>

		<div class="hero-wrap" style="background-image: url('images/Khách-sạn-Hilton-Hà-Nội-Opera-4-1290x860.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang Chủ</a></span> <span>Phòng</span></p>
	            <h2 class="mb-4">Phòng</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section bg-light ftco-no-pb">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Hilton's Rooms</span>
					<h2 class="mb-4">Phòng Khách Sạn</h2>
          		</div>
        	</div>
			<div class="row no-gutters">
			<?php
				require('admin/config/db.php');
				$sql="SELECT * from db_rooms";
				$query=mysqli_query($conn,$sql);
				$count = mysqli_num_rows($query);
				if($count>0)
				{
					while($row=mysqli_fetch_assoc($query)){
					$image_name=$row['image_rm'];
					$id_rm =$row['id_rm'];
					$name_rm=$row['name_rm'];
					$price_rm=$row['price_rm'];
					
			?>
    		
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="rooms-details.php?rooms_id=<?php echo $id_rm; ?>" class="img" style="background-image: url(./images/<?php echo $image_name; ?>);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1"><?php echo $price_rm?></span></p>
								<span class="per">một ngày</span>
	    						<h3 class="mb-3"><a href="rooms-details.php?id_rm=<?php echo $id_rm; ?>"><?php echo $name_rm?></a></h3>
	    						<p class="pt-1"><a href="rooms-details.php?id_rm=<?php echo $id_rm; ?>" class="btn-custom px-3 py-2">Xem Chi Tiết Phòng <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    		</div>
			<?php 
				}
			}
			?>
    	</div>
		</div>
    </section>
	

    <?php
		include('footer.php')

	?>

    
  



  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- // <script src="js/jquery.timepicker.min.js"></script> -->
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
  
</html>
