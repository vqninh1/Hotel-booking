<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="./images/hiltonHotelsLogo.svg.png" />
  <title>Hilton Holten Resort</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-profile.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="./images/hiltonHotelsLogo.svg.png(1).png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Trang Chủ</a></li>
          <li class="nav-item"><a href="rooms.php" class="nav-link">Phòng</a></li>
          <li class="nav-item"><a href="restaurant.php" class="nav-link">Nhà Hàng</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">Giới Thiệu</a></li>
          <?php

          if (isset($_SESSION['login_ok'])) {
            echo '
                        <li class="nav-item">
                            <a href="profile-guest.php" class="nav-link"><i class="fa fa-user"></i>  ' . $_SESSION['login_ok'] . '</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Đăng xuất</a></li>
                        ';
          } else {
            echo '
                        <li class="nav-item"><a class="nav-link" href="login.php">Đăng nhập</a></li>
                        ';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->