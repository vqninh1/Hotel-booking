<?php session_start();
include('./header.php')
?>
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang Chủ</a></span> <span><a href="rooms.php">Nhà Hàng</a></span></p>
                    <h2 class="mb-4">Đặt Phòng</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <?php
    require('admin/config/db.php');
    $id_rm = $_GET['id_rm'];
    $sql="SELECT * from db_rooms where id_rm='$id_rm'";
    $query=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($query)){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="POST" class="order">
                    <div class="food-menu-img">
                    <div class="room-img" style="background-image: url(./images/<?php echo $row['image_rm']; ?>);"></div>
                    </div>
                  
                    <div class="mb-3">
                        <h3>Loại phòng : <?php echo $row['name_rm'] ?></h3></div>
                        <input type="hidden" name="type_cr" value="<?php echo $row['name_rm'] ?>">
                    <div class="mb-3">
                        <h3>Giá phòng: <?php echo $row['price_rm'] ?>VNĐ/đêm</h3>
                        <input type="hidden" name="price_cr" value="<?php echo $row['price_rm'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" name="name_cr" id="naemcheckroom" >
                    </div>
                    <div class="mb-3">
                        <label for="phone"  class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone_cr" id="phonecheckroom">
                    </div>
                    <div class="mb-3">
                        <label for="email"  class="form-label">Email</label>
                        <input type="email" class="form-control" name="email_cr" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="#">Ngày Nhận Phòng</label>
                        <input type="date" class="form-control" name="checkin_cr" required>
                    </div>

                    <div class="mb-3">
                        <label for="#">Ngày Trả Phòng</label>
                        <input type="date" class="form-control" name="checkout_cr" required>
                    </div>
                    <input type="submit" name="submit" value="Đặt phòng" class="btn btn-primary">
                    <input type="hidden" name="id_rm" id="id_rm" value="<?php echo $row['id_rm'];?>">
                    <?php } ?>
                    <?php 
                    require('config/db.php');
                     if (isset($_SESSION['login_oki'])) {
                        $kaitorac = $_SESSION['login_oki']['id_guest'];
                        $query = mysqli_query($conn, "SELECT * from db_users WHERE id_guest = '$kaitorac'");
                        $row = mysqli_fetch_assoc($query);
                      
                    ?>
                    <input type="hidden" name="id_guest" id="id_guest" value="<?php echo $kaitorac;?>">
                    <?php }?>
                   
                </form>
                <?php 

                    //CHeck whether submit button is clicked or not
                    require('admin/config/db.php');
                    if(isset($_POST['submit']))
                    {
                        // Get all the details from the form
                        $kaitorac =$_POST['id_guest'];
                        $id_rm =$_POST['id_rm'];
                        $type_cr = $_POST['type_cr'];
                        $price_cr = $_POST['price_cr'];
                        $checkin_cr = $_POST['checkin_cr']; 
                        $checkout_cr = $_POST['checkout_cr'];
                        $day1 = strtotime($checkin_cr);
                        $day2 = strtotime($checkout_cr);
                        $sec =$day2 - $day1;
                        $status_cr = "Đang xử lí";  
                        $day_cr = $sec/86400;
                        $total_price = ((int)$price_cr * (int)$day_cr);
                        $name_cr = $_POST['name_cr'];
                        $phone_cr = $_POST['phone_cr'];
                        $email_cr = $_POST['email_cr'];
                        //Save the Order in Databaase
                        //Create SQL to save the data
                        $sql2 = "INSERT INTO `db_check_room`( `id_guest`,`id_rm`,`type_cr`, `price_cr`, `name_cr`, `phone_cr`, `email_cr`, `checkin_cr`, `checkout_cr`, `day_cr`, `total_price`, `status_cr`) 
                        VALUES('$kaitorac','$id_rm','$type_cr','$price_cr','$name_cr','$phone_cr','$email_cr','$checkin_cr','$checkout_cr','$day_cr','$total_price','$status_cr')";
                        //Execute the Query
                        $res2 = mysqli_query($conn, $sql2);

                        //Check whether query executed successfully or not
                        if($res2==true)
                        {
                            //Query Executed and Order Saved
                            $_SESSION['order'] = "<div class='success text-center'>Phòng đã được đặt thành công</div>";
                            echo 'Đặt phòng thành công';
                        }
                        else
                        {
                
                            //Failed to Save Order
                            $_SESSION['order'] = "<div class='error text-center'>Đặt phòng thất bại</div>";
                           
                        }

                        }
                
                ?>
                
            </div> <!-- .col-md-8 -->

        </div>
    </div>
</section> <!-- .section -->





<?php include('footer.php') ?>



<!-- loader -->


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