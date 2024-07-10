<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/tuime/tuime/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 14:25:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Tuime - Animal Food Website Template"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>Sản phẩm</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&amp;display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== 7 Stroke Icon CSS ==-->
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="../assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="../assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Range Slider Min CSS ==-->
    <link href="../assets/css/ion.rangeSlider.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="../assets/css/style.css" rel="stylesheet" />
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
                    <img class="logo-main" src="../../img/logo.png" alt="Logo" style="height: 70px;" />
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
              <h2 class="title">Products</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Products</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="shop-top-bar">
              <div class="shop-top-left">
                <p class="pagination-line"><a href="shop.html">12</a> Product Found of <a href="shop.html">30</a></p>
              </div>
              <div class="shop-top-center">
                <nav class="product-nav">
                  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fa fa-th"></i></button>
                    <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fa fa-list"></i></button>
                    <button class="nav-link" id="nav-grid2-tab" data-bs-toggle="tab" data-bs-target="#nav-grid2" type="button" role="tab" aria-controls="nav-grid2" aria-selected="false"><i class="fa fa-th-large"></i></button>
                  </div>
                </nav>
              </div>
              <div class="shop-top-right">
                <div class="shop-sort">
                  <span>Sort By :</span>
                  <select class="form-select" aria-label="Sort select example">
                    <option selected>Default</option>
                    <option value="1">Popularity</option>
                    <option value="2">Average Rating</option>
                    <option value="3">Newsness</option>
                    <option value="4">Price Low to High</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-xl-9">
            <div class="row">
              <div class="col-12">
                <div class="banner-product-single-style2-item">
                  <div class="thumb">
                    <a href="index.php?act=sanpham">
                      <img src="assets/img/shop/banner/3.jpg" width="870" height="247" alt="Image-HasTech">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                    <div class="row">
                      
                        <?php 

                            $spnew = loadall_sanpham();
                            $i = 0;
                            foreach ($spnew as $sp){
                              extract($sp);
                              $linksp = "index.php?act=sanphamct&idsp=" . $id;
                              $hinh = $img_path . $img;
                              echo '<div class="col-sm-6 col-xl-4">
                              <div class="product-item">
                            <div class="product-thumb">
                              <a href="'.$linksp.'">
                                <img src="'.$hinh.'" width="270" height="320" alt="Image-HasTech">
                              </a>
                            </div>
                            <div class="product-info">
                              <h4 class="title"><a href="'.$linksp.'">'.$name.'</a></h4>
                              <div class="prices">
                                <span class="price">'.$price.' VNĐ</span>
                              </div>
                            </div>
                          </div>
                          </div>';
                            }
                            

                        ?>
                    
                      
                      
                      
                      
                      
                      
                      
                        
                    
                      <div class="col-12">
                        <div class="pagination-items pagination-items-style1">
                          <ul class="pagination mb--0">
                            <li><a class="active" href="shop.html">1</a></li>
                            <li><a href="shop-four-columns.html">2</a></li>
                            <li><a href="shop-three-columns.html">3</a></li>
                            <li><a href="shop.html" class="icon"><i class="fa fa-angle-right"></i></a></li>
                          </ul>                    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="shop-sidebar">
              <div class="shop-sidebar-search">
                <div class="sidebar-search-form">
                  <form action="#">
                    <input type="search" placeholder="Search Here">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>

              <div class="shop-widget shop-sidebar-price-range">
                <h4 class="sidebar-title">Price Filter</h4>
                <div class="sidebar-price-range">   
                  <input type="text" class="js-range-slider" name="my_range" value="" data-type="double" data-min="0" data-max="3000" data-from="300" data-to="2500" />
                </div>
              </div>

              <div class="shop-widget shop-sidebar-category">
                <h4 class="sidebar-title">Categoris</h4>
                <div class="sidebar-category">
                  <ul class="category-list mb--0">
                  <?php 
                      $dsdm = loadall_danhmuc();
                      foreach ($dsdm as $dm) {
                      extract($dm);
                      $linkdm = "index.php?act=sanpham&iddm=".$id;
                      echo '<li>
                                  <a href="' . $linkdm . '">' . $name . '</a>
                                  </li>';
                  } ?>
                  </ul>
                </div>
              </div>
              <div class="shop-widget shop-sidebar-color">
                <h4 class="sidebar-title">Color</h4>
                <div class="sidebar-color">
                  <div class="color-list">
                    <div data-bg-color="#ffd868"></div>
                    <div class="active" data-bg-color="#721b65"></div>
                    <div data-bg-color="#dd117e"></div>
                    <div data-bg-color="#0aa5d2"></div>
                  </div>
                </div>
              </div>
              <div class="shop-widget shop-sidebar-size">
                <h4 class="sidebar-title">Size</h4>
                <div class="sidebar-size">
                  <div class="size-list">
                    <div>S</div>
                    <div class="active">M</div>
                    <div>L</div>
                    <div>XL</div>
                  </div>
                </div>
              </div>
              <div class="shop-widget shop-sidebar-tags">
                <h4 class="sidebar-title">Tags</h4>
                <div class="sidebar-tags">
                  <ul class="tags-list mb--0">
                    <li><a href="shop.html">Fashion</a></li>
                    <li><a href="shop.html">Organic</a></li>
                    <li><a href="shop.html">Old Fashion</a></li>
                    <li><a href="shop.html">Men</a></li>
                    <li><a href="shop.html">Fashion</a></li>
                    <li><a href="shop.html">Dress</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->
  </main>

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Product Quick Wishlist Modal ==-->
  <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="product-action-view-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="pe-7s-close"></i>
            </button>
            <div class="modal-action-messages">
              <i class="pe-7s-check"></i>  Added to wishlist successfully!
            </div>
            <div class="modal-action-product">
              <div class="thumb">
                <img src="assets/img/shop/modal1.jpg" alt="Organic Food Juice" width="466" height="320">
              </div>
              <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Product Quick Wishlist Modal ==-->

  <!--== Start Product Quick Add Cart Modal ==-->
  <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="product-action-view-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="pe-7s-close"></i>
            </button>
            <div class="modal-action-messages">
              <i class="pe-7s-check"></i>  Added to cart successfully!
            </div>
            <div class="modal-action-product">
              <div class="thumb">
                <img src="assets/img/shop/modal1.jpg" alt="Organic Food Juice" width="466" height="320">
              </div>
              <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Product Quick Add Cart Modal ==-->

  <!--== Start Product Quick View Modal ==-->
  <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="product-quick-view-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <span class="pe-7s-close"></span>
            </button>
            <div class="container pt--0 pb--0">
              <div class="row">
                <div class="col-lg-6">
                  <!--== Start Product Thumbnail Area ==-->
                  <div class="product-single-thumb">
                    <img src="assets/img/shop/quick-view1.jpg" width="544" height="560" alt="Image-HasTech">
                  </div>
                  <!--== End Product Thumbnail Area ==-->
                </div>
                <div class="col-lg-6">
                  <!--== Start Product Info Area ==-->
                  <div class="product-single-info">
                    <h3 class="main-title">Joust Duffle Bag</h3>
                    <div class="prices">
                      <span class="price">$20.19</span>
                    </div>
                    <div class="rating-box-wrap">
                      <div class="rating-box">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="review-status">
                        <a href="javascript:void(0)">(5 Customer Review)</a>
                      </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nol exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="product-single-meta">
                      <ul>
                        <li><span>SKU:</span> Ch-256xl</li>
                        <li><span>Categories:</span> 
                          <a href="shop.html">Pet Food. eCommerce</a>
                        </li>
                        <li><span>Tags:</span> 
                          <a href="shop.html">Petfood. Pet</a>,
                          <a href="shop.html">Animal.</a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-quick-action">
                      <div class="qty-wrap">
                        <div class="pro-qty">
                          <input type="text" title="Quantity" value="01">
                        </div>
                      </div>
                      <button type="button" class="btn-product-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                        Add To Cart
                      </button>
                        <button type="button" class="btn-product-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                          <i class="pe-7s-like"></i>
                        </button>
                      <button type="button" class="btn-product-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                        <i class="pe-7s-look"></i>
                      </button>
                    </div>
                  </div>
                  <!--== End Product Info Area ==-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Product Quick View Modal ==-->

</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="../assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="../assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="../assets/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="../assets/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="../assets/js/bootstrap.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="../assets/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="../assets/js/fancybox.min.js"></script>
<!--=== jQuery Countdown Min Js ===-->
<script src="../assets/js/countdown.js"></script>
<!--=== jQuery Isotope Min Js ===-->
<script src="../assets/js/isotope.pkgd.min.js"></script>
<!--=== jQuery Range Slider Min Js ===-->
<script src="../assets/js/ion.rangeSlider.min.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="../assets/js/custom.js"></script>

</body>


<!-- Mirrored from htmldemo.net/tuime/tuime/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 14:25:30 GMT -->
</html>