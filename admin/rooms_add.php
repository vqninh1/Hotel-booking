<?php
  session_start();
  if(!isset($_SESSION['login_ok'])){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Thông Tin Phòng</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <link href="../fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
  <?php include('menu.php')?>
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
    <div class="row">
    <form action="" method="POST">
        <table>
            <tr>
                <td colspan="2"><h3>Thêm Phòng</h3></td>
            </tr>
            <tr>
                <td>Số Phòng</td>
                <td><input type="text" name="number_rm" value="" size="30"></td>
            </tr>
            <tr>
                <td>Loại Phòng</td>
                <td><input type="text" name="type_rm" value="" size="30"></td>
            </tr>
            <tr>
                <td>Diện Tích</td>
                <td><input type="text" name="area_rm" value="" size="30"></td>
            </tr>
            <tr>
                <td>Số Giường</td>
                <td><input type="text" name="bed_rm" value="" size="30"></td>
            </tr>
            <tr>
                <td>Hướng Nhìn</td>
                <td><input type="text" name="view_rm" value="" size="30"></td>
            </tr>
            <tr>
                <td>Sức Chứa</td>
                <td><input type="text" name="capacity_rm" value="" size="30"></td>
            </tr>
            <tr>
                <td>Phòng Trống</td>
                <td><input type="text" name="available_rm" value="" size="30"></td>
            </tr>
            <tr>
                <td>Hoàn Tiền</td>
                <td><input type="text" name="refund_rm" value="" size="30"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Thêm"  name="btnAdd">
                </td>
            </tr>
        </table>
    </form>
      <!--End Dashboard Content-->
	  
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
     </div><!--End wrapper-->
