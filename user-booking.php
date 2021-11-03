<?php include('header.php')?>
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
<div class="service" style="text-align:center">
    <h2 class="text-info">Các Dịch Vụ Đặt Bàn Của Bạn</h2>
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
    </tr>
  </thead>
  <tbody>
    <?php
        require('admin/config/db.php');
        $sql = "SELECT name_bt,email_bt, phone_bt, type_bt,person_bt,date_bt,time_bt FROM db_bookingtable ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $i=1;
            while($row = mysqli_fetch_assoc($result)){
          
      ?>
      
      <tr>
      <th scope="row"><?php echo $i; ?> </th>
      <td><?php echo $row['name_bt']; ?> </td>
      <td><?php echo $row['email_bt']; ?> </td>
      <td><?php echo $row['phone_bt']; ?> </td>
      <td><?php echo $row['type_bt']; ?> </td>
      <td><?php echo $row['person_bt']; ?> </td>
      <td><?php echo $row['date_bt']; ?> </td>
      <td><?php echo $row['time_bt']; ?> </td>
      </tr>
      <?php
          $i++;
          }
      }
    ?>
  </tbody>
  </table>
<div class="booking-rooms" style="text-align:center">
    <h2 class="text-info">Các Dịch Vụ Đặt Phòng Của Bạn</h2>
</div>
         

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
            require('admin/config/db.php');
            $sql = "SELECT * from db_rooms";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
    <th scope="row"><?php echo $i; ?> </th>
    <td><?php echo $row['id_rm']; ?> </td>
    <td><?php echo $row['name_rm']; ?> </td>
    <td><?php echo $row['area_rm']; ?> </td>
    <td><?php echo $row['bed_rm']; ?> </td>
    <td><?php echo $row['capacity_rm']; ?> </td>
    <td><img src="../images/<?php echo $row['image_rm']; ?>" width="100px"></td>
    <td><?php echo $row['available_rm']; ?> </td>
    <td><?php echo $row['price_rm']; ?> </td>
    <td><a href="rooms_update.php?id_rm=<?php echo $row['id_rm']; ?>"><i class="fas fa-edit"></i></a></td>
    <td><a href="rooms_delete.php?id_rm=<?php echo $row['id_rm']; ?>"><i class="fas fa-trash"></i></a></td>
    </tr>
    <?php 
        $i++;
        }
        }
    ?>
</table>

<?php include('footer.php')?>