<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/tuime/tuime/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 14:25:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Tuime - Animal Food Website Template"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>Mỹ phẩm ĐAN.N</title>

    <!--== Favicon ==-->

    <link rel="shortcut icon" href="assets/img/logo/logo1.png" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&amp;display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== 7 Stroke Icon CSS ==-->
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Range Slider Min CSS ==-->
    <link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Preloader Content ==-->
  <!-- <div class="preloader-wrap">
    <div class="preloader">
      <div class="dog-head"></div>
      <div class="dog-body"></div>
    </div>
  </div> -->
  <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area transparent">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-start">
              <div class="header-logo-area">
                <a href="index.php">
                  <img class="logo-main" src="assets/img/logo/logo1.png" width="90" height="36" alt="Logo" />
                </a>
              </div>
            </div>
            <div class="header-align-center">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li class="has-submenu"><a href="index.php"><span>Trang chủ</span></a>
                  </li>
                  <li class="has-submenu position-static"><a href="index.php?act=sanpham"><span>Menu</span></a>
                    <ul class="submenu-nav submenu-nav-mega column-3">
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Menu</span></a>
                        <ul>
                          <?php
                            $dsdm = loadall_danhmuc();
                            foreach ($dsdm as $dm) {

                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                echo '<li><a href="' . $linkdm . '"><span>' . $name . '</span></a></li>';
                            }
                            ?>
                        </ul>
                      </li>

                    </ul>
                  </li>
                  <li class="has-submenu"><a href="#"><span>Giới thiệu</span></a></li>
                  <li><a href="contact.html"><span>Liên hệ</span></a></li>
                  <li class="has-submenu"><a href="index.php?act=account"><span>Tài khoản</span></a>
                    <ul class="submenu-nav">
                      <li><a href="index.php?act=account"><span>Trang cá nhân</span></a></li>
                      <li><a href="index.php?act=edittk"><span>Cập nhật tài khoản</span></a></li>
                      <li><a href="index.php?act=dangnhap"><span>Đăng nhập</span></a></li>
                      <li><a href="index.php?act=dangky"><span>Đăng ký</span></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="header-align-end">
              <div class="header-action-area">
                <div class="shopping-search">
                  <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                </div>
                <div class="shopping-account">
                  <a class="shopping-account-btn" href="index.php?act=account">
                    <i class="pe-7s-users icon"></i>
                  </a>
                </div>
                <div class="shopping-wishlist">
                  <a class="shopping-wishlist-btn" href="shop-wishlist.html">
                    <i class="pe-7s-like icon"></i>
                  </a>
                </div>
                <div class="shopping-cart">
                  <a href="index.php?act=addtocart">
                  <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                    <i class="pe-7s-shopbag icon"></i>
                    <sup class="shop-count">!</sup>
                  </button>
                </div>
                  </a>
                <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                  <i class="pe-7s-menu"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->