<?php
session_start();
if (!isset($_SESSION['login_oke'])) 
{
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
  <link rel="shortcut icon" href="./images/hiltonHotelsLogo.svg.png" />
  <title>Quản lý tài khoản</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
  <link href="../fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">

 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <?php include('menu.php')?>

    <!--Start topbar header-->
    <header class="topbar-nav">
      <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu"  href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>
          
        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
        <?php
          require('./config/db.php');
          if (isset($_SESSION['login_oke'])) {
            $kaitozac = $_SESSION['login_oke']['id_user'];
            $query = mysqli_query($conn, "SELECT * from db_admin WHERE id_user = '$kaitozac'");
            $row = mysqli_fetch_assoc($query);
          }
          if (isset($_SESSION['login_oke'])) {
          ?>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
              <span class="user-profile img-circle"><img src="../images/<?php echo $row['img_admin']; ?>" width="50px"  alt="Image" class="shadow"></span>
            </a>
          <?php
          }
          ?>
            <ul class="dropdown-menu dropdown-menu-right">                          
            <li class="dropdown-divider"></li>             
              <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="logout.php">Đăng Xuất</a> </li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-12">
            <div class="card">
              <div class="card-header">Bảng điều khiển tài khoản người dùng
                <div class="table-responsive">
                  <tbody>
                    <table class="table align-items-center table-flush table-borderless">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>ID</th>
                          <th>Họ tên</th>
                          <th>mật khẩu</th>
                          <th>Email</th>
                          <th>SDT</th>
                          <th>Ảnh đại diện</th>
                          <th>Địa chỉ</th>
                          <th></th>
                        </tr>
                      </thead>
                      <?php
                      $conn = mysqli_connect('localhost', 'root', '', 'hotel-booking');
                      if (!$conn) {
                        die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                      }
                      $sql = "SELECT * from db_users";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['id_guest']; ?></td>
                            <td><?php echo $row['username_guest']; ?></td>
                            <td><?php echo $row['password_guest']; ?></td>
                            <td><?php echo $row['email_guest']; ?></td>
                            <td><?php echo $row['phone_guest']; ?></td>
                            <td><img src="../images/<?php echo $row['img_guest']; ?>" width="100px"></td>
                            <td><?php echo $row['address_guest']; ?></td>
                            <td><a href="./update-guest.php?id_guest=<?php echo $row['id_guest']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="./delete-guest.php?id_guest=<?php echo $row['id_guest']; ?>"><i class="fas fa-trash"></i></a></td>
                          </tr>
                      <?php
                          $i++;
                        }
                      }

                      ?>
                    </table>
                  </tbody>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-12">
            <div class="card">
              <div class="card-header">Bảng điều khiển tài khoản admin
                <div class="card-action">
                <div class="dropdown">
                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                  <i class="icon-options"></i>
                </a>
                  
                </div>
              </div>
                <div class="table-responsive">
                  <tbody>
                    <table class="table align-items-center table-flush table-borderless">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>ID</th>
                          <th>Tên tài khoản</th>
                          <th>Họ tên</th>
                          <th>mật khẩu</th>
                          <th>Email</th>
                          <th>SDT</th>
                          <th>Ảnh đại diện</th>
                          <th>Địa chỉ</th>
                          <th></th>
                        </tr>
                      </thead>
                      <?php
                      $conn = mysqli_connect('localhost', 'root', '', 'hotel-booking');
                      if (!$conn) {
                        die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                      }
                      $sql = "SELECT * from db_admin";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['id_user']; ?></td>
                            <td><?php echo $row['name_user']; ?></td>
                            <td><?php echo $row['fullname_user']; ?></td>
                            <td><?php echo $row['password_user']; ?></td>
                            <td><?php echo $row['email_user']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><img src="../images/<?php echo $row['img_admin']; ?>" width="100px"></td>
                            <td><?php echo $row['address_user']; ?></td>
                            <td><a href="./update-admin.php?id_user=<?php echo $row['id_user']; ?>"><i class="fas fa-edit"></i></a></td>
                          </tr>
                      <?php
                          $i++;
                        }
                      }

                      ?>
                    </table>
                  </tbody>
                </div>

              </div>
            </div>
          </div>

            <!--End Dashboard Content-->

          <div class="overlay toggle-menu"></div>
            <!--end overlay-->

          
          <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
          <div class="container">
            <div class="text-center">

            </div>
          </div>
        </footer>
        <!--End footer-->

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
      <!-- loader scripts -->
      <script src="assets/js/jquery.loading-indicator.js"></script>
      <!-- Custom scripts -->
      <script src="assets/js/app-script.js"></script>
      <!-- Chart js -->

      <script src="assets/plugins/Chart.js/Chart.min.js"></script>

      <!-- Index js -->
      <script src="assets/js/index.js"></script>


</body>

</html>