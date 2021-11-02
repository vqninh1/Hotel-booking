<?php
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
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="email" class="form-control" name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" name="phone" class="form-label">Số điện thoại</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" name="email" class="form-label">Email</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="#">Ngày Nhận Phòng</label>
                            <input type="text" class="form-control checkin_date" name="checkin" placeholder="Ngày Nhận Phòng">
                        </div>

                        <div class="mb-3">
                            <label for="#">Ngày Trả Phòng</label>
                            <input type="text" class="form-control checkout_date" name="checkout" placeholder="Ngày Trả Phòng">
                        </div>
                        <div class="mb-3">
                            <label for="#">Loại Phòng</label>
                            <div class="mb-3">
                                <div class="select-wrap">
                                    <select name="type" id="" class="form-control">
                                        <option value="">Phòng Cổ Điển</option>
                                        <option value="">Phòng Gia Đình</option>
                                        <option value="">Phòng Deluxe</option>
                                        <option value="">Phòng Thượng Hạng</option>
                                        <option value="">Phòng Sang Trọng</option>
                                        <option value="">Phòng Superior</option>
                                    </select>
                                </div>
                            </div>						
						</div>
                        <button type="button" class="btn btn-outline-secondary"><a href="order-room.php">Đặt phòng</a></button>
                    </form>
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
</section> <!-- .section -->





<?php include('footer.php') ?>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


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