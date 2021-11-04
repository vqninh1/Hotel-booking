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

    <!--Start Dashboard Content-->

    <div class="row">
    <div class="col-12 col-lg-12">
      <div class="card">
        <div class="card-header">Bảng điều khiển phòng
        <div class="card-action">
              <div class="dropdown">
              <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                <i class="icon-options"></i>
              </a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="rooms_add.php">Thêm</a>
                </div>
              </div>
        </div>
          <div class="table-responsive">
                  <table class="table align-items-center table-flush table-borderless">
                    <thead>
                    <tr>
                      <th>STT</th>
                      <th>Mã Phòng</th>
                      <th>Tên Phòng</th>
                      <th>Diện Tích</th>
                      <th>Số Giường</th>
                      <th>Sức Chứa</th>
                      <th>Hình Ảnh</th>
                      <th>Phòng Trống</th>
                      <th>Giá Phòng (VNĐ)</th>
                    </tr>
                    </thead>
                        <?php
                            require('./config/db.php');
                            $sql = "SELECT * from db_rooms";
                            $result = mysqli_query($conn,$sql);

                            //bước 3 xử lý kết quả trả về

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
                </div>
      </div>
    </div>
    </div><!--End Row-->

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
  <!--end color switcher-->
   
  </div><!--End wrapper-->


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
