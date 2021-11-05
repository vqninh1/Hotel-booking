<?php include('header.php') ?>

<!-- END nav -->
<div class="hero">
	<div class="container-wrap d-flex justify-content-end align-items-end">
		<a href="https://www.youtube.com/watch?v=kbLUbqLQd84" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
			<span class="ion-ios-play play"></span>
		</a>
	</div>
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/Khách-sạn-Hilton-Hà-Nội-Opera-2-1290x860.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center">
					<div class="col-md-8 ftco-animate">
						<div class="text mb-5 pb-5">
							<h1 class="mb-3">Hilton</h1>
							<h2>More than a hotel... an experience</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image:url(images/Khách-sạn-Hilton-Hà-Nội-Opera-4-1290x860.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center">
					<div class="col-md-8 ftco-animate">
						<div class="text mb-5 pb-5">
							<h1 class="mb-3">Experience Epic Beauty</h1>
							<h2>Hilton Hotel &amp; Resort</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>




<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Chào mừng đến khách sạn Hilton</span>
				<h2 class="mb-4">Các Dịch Vụ Khác</h2>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services py-4 d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-reception-bell"></span>
						</div>
					</div>
					<?php 
					 if (isset($_SESSION['login_oki'])) {
					?>
					<div class="media-body">
						<a href="booking-table.php?id_guest=<?php echo $row['id_guest']; ?>">
							<h3 class="heading mb-3">Đặt Bàn</h3>
						</a>
					</div>
					<?php 
					}?>
				</div>
			</div>
			<div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services py-4 d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-serving-dish"></span>
						</div>
					</div>
					<div class="media-body">
						<h3 class="heading mb-3">Tiệc Cưới</h3>
					</div>
				</div>
			</div>
			<div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services py-4 d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-spa"></span>
						</div>
					</div>
					<div class="media-body">
						<h3 class="heading mb-3">Suits &amp; SPA</h3>
					</div>
				</div>
			</div>
			<div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services py-4 d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="ion-ios-bed"></span>
						</div>
					</div>
					<div class="media-body">
						<h3 class="heading mb-3">Cozy Rooms</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light ftco-no-pb">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Hilton's Rooms</span>
					<h2 class="mb-4">Phòng Khách Sạn</h2>
          		</div>
        	</div>
			<div class="row no-gutters">
			<div class="col-lg-12">
                <div class="room-wrap">
                    <div class="img d-flex align-items-center" style="background-image: url(images/bg_3.jpg);">
                        <div class="text text-center px-4 py-4">
                            <h2>Chào mừng tới khách sạn <a href="index.html">Hilton</a> </h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
			<?php
				require('admin/config/db.php');
				$sql="SELECT * from db_rooms LIMIT 4";
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
								<span class="per">một đêm</span>
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
		</br>

<?php

include('restaurant.php')

?>



<?php

include('footer.php')

?>