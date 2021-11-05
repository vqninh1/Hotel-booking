<?php
include('header(table).php');

?>

<div class="hero-wrap" style="background-image: url('./images/Khách-sạn-Hilton-Hà-Nội-Opera-4-1290x860.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang Chủ</a></span> <span>Đặt Bàn</span></p>
                    <h2 class="mb-4">Đặt Bàn</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-menu" style="background-image: url(images/restaurant-pattern.jpg);">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Nhà Hàng Astralis</span>
                <h2>Dịch Vụ Đặt Bàn</h2>
            </div>
        </div>
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                    <?php
                        if(isset($_GET['response'])){
                            if($_GET['response'] == 'successfully'){
                                echo "<p class='text-danger'>Bạn đã đặt bàn thành công</p>";
                            }

                        }
                        require('config/db.php');
                        if (isset($_SESSION['login_oki'])) {
                        $kaitorac = $_SESSION['login_oki']['id_guest'];
                        $query = mysqli_query($conn, "SELECT * from db_users WHERE id_guest = '$kaitorac'");
                        $row = mysqli_fetch_assoc($query);
                      
                    ?>
                        <form action="process-booking-table.php" method="POST">
                            <input type="hidden" name="id_guest" id="id_guest" value="<?php echo $kaitorac;?>">
                            <?php }
                            ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Họ Tên</span>
                                        <input class="form-control" name="name_guest" type="text" placeholder="Nhập tên">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <input class="form-control" name="email_guest" type="email" placeholder="Nhập email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Số Điện Thoại</span>
                                <input class="form-control" type="tel" name="phone_guest" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Chọn Bàn</span>
                                <select class="form-control" id="type_table" name="type_table" >
                                    <option>Bàn Thường</option>
                                    <option>Bàn Giản Dị</option>
                                    <option>Bàn Cao Cấp</option>
                                    <option>Bàn Siêu Cấp</option>
                                    <option>Bàn Vip Pro</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Chọn Số Người</span>
                                <select class="form-control" id="person" name="person">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Chọn Ngày</span>
                                        <input  class="form-control" name="date" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Chọn Thời Gian</span>
                                        <input class="form-control" name="time" type="time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="btn submit-btn" name="btnBooking">Đặt Bàn Ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Thực Đơn</span>
                <h2>Thực Đơn Siêu Hấp Dẫn</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img order-md-last" style="background-image: url(images/menu1.jpg);"></div>
                    <div class="desc pr-3 text-md-right">
                        <div class="d-md-flex text align-items-center">
                            <h3 class="order-md-last heading-left"><span>Cua nướng mỡ hành</span></h3>
                        </div>
                        <div class="d-block">
                            <p>Cua được nướng trong ở nhiệt độ cao cùng ủ hấp 3 phút tạo cho món ắn có hương vị tươi nhất</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img order-md-last" style="background-image: url(images/menu2.jpg);"></div>
                    <div class="desc pr-3 text-md-right">
                        <div class="d-md-flex text align-items-center">
                            <h3 class="order-md-last heading-left"><span>Bò nướng kèm khoai tây</span></h3>
                            <span class="price price-left"></span>
                        </div>
                        <div class="d-block">
                            <p>Bò nướng than hoa kèm khoai tây nhào bột hình rồng bay phượng múa</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img order-md-last" style="background-image: url(images/menu3.jpg);"></div>
                    <div class="desc pr-3 text-md-right">
                        <div class="d-md-flex text align-items-center">
                            <h3 class="order-md-last heading-left"><span>Bún đậu mắm tôm</span></h3>
                            <span class="price price-left"></span>
                        </div>
                        <div class="d-block">
                            <p>Ai mà chưa ăn món này chưa phải là hản hán</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img order-md-last" style="background-image: url(images/menu4.jpg);"></div>
                    <div class="desc pr-3 text-md-right">
                        <div class="d-md-flex text align-items-center">
                            <h3 class="order-md-last heading-left"><span>Dê nướng ngũ vị hương</span></h3>
                            <span class="price price-left"></span>
                        </div>
                        <div class="d-block">
                            <p>Ngũ vị hương được ủ trong lò cấp đông 77 49 ngày được hòa quyện cùng thịt dê Ninh Bình</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/menu5.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-md-flex text align-items-center">
                            <h3><span>Kiên kê xào tỏi</span></h3>
                            <span class="price"></span>
                        </div>
                        <div class="d-block">
                            <p>Kiên kê - vừa lạ vừa quen được ninh trong vòng 48h hào quyện cùng tỏi Lý Sơn</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/menu6.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-md-flex text align-items-center">
                            <h3><span>Bò Kobe dát vàng</span></h3>
                            <span class="price"></span>
                        </div>
                        <div class="d-block">
                            <p>Bò KOBE + Vàng miếng phủ bên ngoài</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/menu7.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-md-flex text align-items-center">
                            <h3><span>Tráng miệng đẳng cấp</span></h3>
                            <span class="price"></span>
                        </div>
                        <div class="d-block">
                            <p>Bánh Gato,Các loại pudding,Nho xấy,...</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/menu8.png);"></div>
                    <div class="desc pl-3">
                        <div class="d-md-flex text align-items-center">
                            <h3><span>Điểm tâm &amp; Đồ uống</span></h3>
                            <span class="price"></span>
                        </div>
                        <div class="d-block">
                            <p>Bánh quy,Ngũ cốc,Nước ép dư hấu,Sinh tố lúa mạch,...</p>
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