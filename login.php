<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="icon" href="./images/undraw_Designer_by46.svg" type="images/ico" />
    <link rel="stylesheet" type="text/css" href="./css/css/login.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
</head>
<body>
    <img class="background" src="./images/background-white-full-hd_030745983.jpg">
    <div class="container">
        <div class="img">
            <img src="./images/undraw_mobile_user_-7-oqo.svg">
        </div>
        <div class="login-container">
            <form action="login.php">
                <img class="avatar" src="./images/undraw_profile_pic_ic-5-t.svg">
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Tên đăng nhập</h5>
                        <input class="input" type="text" id="name">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                    <h5>Mật khẩu</h5>
                    <input class="input" type="password" id="password">
                    </div>
                </div>
                <div class="more-information">
                    <a href="#">Quên Mật Khẩu ?</a>
                    <a target="_blank" href="resigter.php">Chưa có tài khoản ?</a>
                </div>
                <input type="submit" class="btn" value="Đăng Nhập">
                <p class="social-text">Hoặc Đăng Nhập Với</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="./js/login.js"></script>
</body>
</html>