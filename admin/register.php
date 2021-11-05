<?php
  session_start();
  if(!isset($_SESSION['login_oke'])){
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
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
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

    <div class="card card-authentication1 mx-auto my-4">
      <div class="card-body">
        <div class="card-content p-2">
          <div class="text-center">
            <img src="assets/images/logo-icon.png" alt="logo icon">
          </div>
          <div class="card-title text-uppercase text-center py-3">Đăng ký</div>
          <?php
          if (isset($_GET['response'])) {
            if ($_GET['response'] == 'successfully') {
              echo "<p class='text-danger'>Bạn đã đăng ký thành công</p>";
            }
            if ($_GET['response'] == 'existed') {
              echo "<p class='text-danger'>email đã tồn tại</p>";
            }
          }
          ?>

          <form class="mx-1 mx-md-4" action="process-register.php" method="POST">
            <div class="form-group">
              <label for="exampleInputFullName" class="sr-only">Họ tên</label>
              <div class="position-relative has-icon-right">
                <input type="text" id="exampleInputFullName" name="fullname" class="form-control input-shadow" placeholder="Nhập họ tên">
                <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputName" class="sr-only">Tên tài khoản</label>
              <div class="position-relative has-icon-right">
                <input type="text" id="exampleInputName" name="username" class="form-control input-shadow" placeholder="Nhập tên tài khoản">
                <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmailId" class="sr-only">Nhập email</label>
              <div class="position-relative has-icon-right">
                <input type="text" id="exampleInputEmailId" name="email" class="form-control input-shadow" placeholder="Nhập email">
                <div class="form-control-position">
                  <i class="icon-envelope-open"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword" class="sr-only">Mật khẩu</label>
              <div class="position-relative has-icon-right">
                <input type="password" id="exampleInputPassword" name="pass1" class="form-control input-shadow" placeholder="Nhập mật khẩu">
                <div class="form-control-position">
                  <i class="icon-lock"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassworda" class="sr-only">Nhập lại mật khẩu</label>
              <div class="position-relative has-icon-right">
                <input type="password" id="exampleInputPassworda" name="pass2" class="form-control input-shadow" placeholder="Nhập lại mật khẩu">
                <div class="form-control-position">
                  <i class="icon-lock"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="phonenumber" class="sr-only">Số điện thoại</label>
              <div class="position-relative has-icon-right">
                <input type="text" id="phonenumber" name="phonenumber" class="form-control input-shadow" placeholder="Nhập số điện thoại">
                <div class="form-control-position">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="address_user" class="sr-only">Địa chỉ</label>
              <div class="position-relative has-icon-right">
                <input type="text" id="address_user" name="address_user" class="form-control input-shadow" placeholder="Nhập địa chỉ">
                <div class="form-control-position">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                  </svg>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Tạo</button>
        </div>
        </form>
      </div>
    </div>
  </div>

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
  <!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

</body>

</html>