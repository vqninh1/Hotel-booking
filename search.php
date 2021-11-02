<?php include('header.php')?>
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
</div>
</section>
<?php
	require('admin/config/db.php');
	$search = mysqli_real_escape_string($conn, $_POST['search']);
	$sql1="SELECT * from db_rooms WHERE name_rm LIKE '%$search%' OR des_rm LIKE '%$search%'";
	$query=mysqli_query($conn,$sql1);
	$count = mysqli_num_rows($query);

?>
<section class="food-search text-center">
        <div class="container">

            <h4><span class="text-danger">Có <?php echo $count; ?> Kết Quả Liên Quan Đến Từ Khóa "<?php echo $search;?>"</span></h4>

        </div>
</section>
<div class="rooms">
	<h2><span class="text-info">Phòng : </span></h2>
</div>
<div class="container-fluid px-0">
<div class="row no-gutters">
<?php
	$sql1="SELECT * from db_rooms WHERE name_rm LIKE '%$search%' OR des_rm LIKE '%$search%'";
	$query=mysqli_query($conn,$sql1);
	$count = mysqli_num_rows($query);
	if($count>0)
	{
		while($row=mysqli_fetch_assoc($query))
		{
			$image_name=$row['image_rm'];
			$price_rm=$row['price_rm'];
			$id_rm=$row['id_rm'];
			$name_rm=$row['name_rm'];
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
else
{
	echo "<div class='error'>Không có phòng nào liên quan đến từ khóa $search.</div>";
}
?>

</div>
</div>
<div class="service">
	<h2><span class="text-info">Dịch Vụ : </span></h2>
</div>

<?php include('footer.php')?>