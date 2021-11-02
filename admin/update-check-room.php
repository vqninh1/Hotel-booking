<?php
session_start();
require("./config/db.php");
if (!isset($_SESSION['login_ok'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Đặt Phòng</title>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />


</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <?php include('menu.php') ?>
        <!--End sidebar-wrapper-->

        <!--End sidebar-wrapper-->


        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Nhập từ khóa">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">
                                                <?php
                                                echo $_SESSION['login_ok']['name_user'];
                                                ?>
                                            </h6>
                                            <p class="user-subtitle">
                                                <?php
                                                echo $_SESSION['login_ok']['email_user'];
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Tài Khoản</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Đăng Xuất</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->
        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <main>
                    <?php
                    $id_cr = $_GET['id_cr'];
                    $query = mysqli_query($conn, "SELECT * from db_check_room where id_cr='$id_cr'");
                    $row = mysqli_fetch_assoc($query);
                    ?>
                    <div class="container-fluid">
                        <form method="POST" class="form">
                            <h2>Sửa thông tin đặt phòng</h2>
                            <label>Họ tên </label><input type="text" value="<?php echo $row['name_cr']; ?>" name="name_cr"><br>
                            <label>SĐT </label> <input type="text" value="<?php echo $row['phone_cr']; ?>" name="phone_cr"><br>
                            <label>Email </label> <input type="text" value="<?php echo $row['email_cr']; ?>" name="email_cr"><br>
                            <label>Check-in </label> <input type="date" value="<?php echo $row['checkin_cr']; ?>" name="checkin_cr"><br>
                            <label>Check-out </label> <input type="date" value="<?php echo $row['checkout_cr']; ?>" name="checkout_cr"><br>
                            <label>Loại phòng </label> <input type="text" value="<?php echo $row['type_cr']; ?>" name="type_cr"><br>
                            <label>Giá phòng </label> <input type="text" value="<?php echo $row['price_cr']; ?>" name="price_cr"><br>
                            <label>Tình trạng </label> <input type="text" value="<?php echo $row['status_cr']; ?>" name="status_cr"><br>
                            <button class="contact100-form-btn" type="submit" name="update_user">Sửa</button>
                            <?php
                            if (isset($_POST['update_user'])) {
                                $name_cr = $_POST['name_cr'];
                                $phone_cr = $_POST['phone_cr'];
                                $email_cr = $_POST['email_cr'];
                                $checkin_cr = $_POST['checkin_cr'];
                                $checkout_cr = $_POST['checkout_cr'];
                                $type_cr = $_POST['type_cr'];
                                $price_cr = $_POST['price_cr'];
                                $status_cr = $_POST['status_cr'];
                                // Create connection
                                $conn = new mysqli("localhost", "root", "", "hotel-booking");
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Lỗi kết nối " . $conn->connect_error);
                                }

                                $sql = "UPDATE db_check_room SET name_cr='$name_cr',phone_cr = '$phone_cr', email_cr='$email_cr', checkin_cr='$checkin_cr' , 
                                checkout_cr='$checkout_cr', type_cr='$type_cr', price_cr='$price_cr' , status_cr='$status_cr' WHERE id_cr='$id_cr'";

                                if ($conn->query($sql) === TRUE) {
                                    echo "Sửa thành công";
                                } else {
                                    echo "Sửa không thành công " . $conn->error;
                                }

                                $conn->close();
                            }
                            ?>

                        </form>
                    </div>

                </main>

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div>
    <!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

</body>

</html>