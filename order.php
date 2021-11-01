<?php
    include('header.php')
?>
        

<?php
    if(isset($_GET['food_id'])){
        $food_id = $_GET['food_id'];

        $sql_1=" SELECT * FROM db_food WHERE id=$food_id";

        $res =  mysqli_query($conn,$sql_1);

        $count = mysqli_num_rows($res);

        if($count==1){
            $row = mysqli_fetch_assoc($res);

            $title = $row['title'];
            $price = $row['price'];
            $image_name = $row['image_name'];
        }else{
            header('location: '.SITEURL);
        }
    }else{
        header('location: '.SITEURL);
    }

    ?>

<div class="hero-wrap" style="background-image: url('./images/Khách-sạn-Hilton-Hà-Nội-Opera-4-1290x860.jpg');">
			<div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                        <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                            <div class="text">
                                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang Chủ</a></span> <span>Nhà Hàng</span></p>
                                <h2 class="mb-4">Xác Nhận Đơn Đặt Của Bạn</h2>
                            </div>
                        </div>
                    </div>
                </div>
    	</div>

    