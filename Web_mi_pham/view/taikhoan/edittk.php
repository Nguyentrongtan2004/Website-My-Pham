<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/tuime/tuime/account-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 14:25:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Tuime - Animal Food Website Template"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>Register</title>

    <link rel="stylesheet" href="../../css/style.css">

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="../../https://fonts.googleapis.com/">
    <link rel="preconnect" href="../../https://fonts.gstatic.com/" crossorigin>
    <link href="../../https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&amp;display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== 7 Stroke Icon CSS ==-->
    <link href="../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="../../assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="../../assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Range Slider Min CSS ==-->
    <link href="../../assets/css/ion.rangeSlider.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="../../assets/css/style.css" rel="stylesheet" />
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap">
    <div class="preloader">
      <div class="dog-head"></div>
      <div class="dog-body"></div>
    </div>
  </div>
  <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default" data-bg-img="assets/img/photos/header-bg.webp">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-start">
              <div class="header-logo-area">
                <a href="index.html">
                  <img class="logo-main" src="../../img/logo.png" alt="Logo" style="height: 70px;"/>
                </a>
             
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->
  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="assets/img/photos/bg1.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Trang tài khoản</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-sep">//</li>
                    <li>Cập nhật tài khoản</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start My Account Area Wrapper ==-->
    <section class="account-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="register-form-content">
                <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                ?>
              <form method="POST" action="index.php?act=edittk">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Tên đăng nhập <span class="required">*</span></label>
                      <input id="username" name="user" class="form-control" type="text" value="<?=$user?>">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email">Email <span class="required">*</span></label>
                      <input id="email" name="email" class="form-control" type="email" value="<?=$email?>">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password">Mật khẩu <span class="required">*</span></label>
                      <input id="password" name="pass" class="form-control" type="password" value="<?=$pass?>">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="address">Địa chỉ <span class="required">*</span></label>
                      <input id="password" name="address" class="form-control" type="text" value="<?=$address?>">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password">Số điện thoại <span class="required">*</span></label>
                      <input id="password" name="tel" class="form-control" type="text" value="<?=$tel?>">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group mb--0">
                        <input type="hidden" name="id" value="<?=$id?>">
                      <input class="btn-register" name="capnhat" type="submit" value="Cập nhật">
                      <center><p>---</p></center>
                      <input class="btn-register" type="reset" value="Nhập lại">
                      
                      
                    </div>
                  </div>
                </div>
              </form>
              <h2 class="thongbao" style="font-size: 20px;">
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End My Account Area Wrapper ==-->


<!--=== jQuery Modernizr Min Js ===-->
<script src="../../assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="../../assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="../../assets/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="../../assets/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="../../assets/js/bootstrap.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="../../assets/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="../../assets/js/fancybox.min.js"></script>
<!--=== jQuery Countdown Min Js ===-->
<script src="../../assets/js/countdown.js"></script>
<!--=== jQuery Isotope Min Js ===-->
<script src="../../assets/js/isotope.pkgd.min.js"></script>
<!--=== jQuery Range Slider Min Js ===-->
<script src="../../assets/js/ion.rangeSlider.min.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="../../assets/js/custom.js"></script>

</body>


<!-- Mirrored from htmldemo.net/tuime/tuime/account-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 14:25:48 GMT -->
</html>