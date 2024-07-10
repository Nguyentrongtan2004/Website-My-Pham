<
    <title>Đặt hàng thành công</title>


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
            <div class="header-align-end">
              <div class="header-action-area">
                <div class="shopping-search">
                  <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                </div>
                <div class="shopping-account">
                  <a class="shopping-account-btn" href="account-login.html">
                    <i class="pe-7s-users icon"></i>
                  </a>
                </div>
                <div class="shopping-wishlist">
                  <a class="shopping-wishlist-btn" href="shop-wishlist.html">
                    <i class="pe-7s-like icon"></i>
                  </a>
                </div>
                <div class="shopping-cart">
                  <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                    <i class="pe-7s-shopbag icon"></i>
                    <sup class="shop-count">2</sup>
                  </button>
                </div>
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
  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="assets/img/photos/bg1.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Đặt hàng thành công</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Bill</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start My Account Wrapper ==-->
    <section class="my-account-area">
      <div class="container pt--0 pb--0">
        <div class="row">
        <div class="col-lg-12">
          <div class="myaccount-page-wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-4">
                <nav>
                  <div class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="dashboad-tab" data-bs-toggle="tab" data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad" aria-selected="true">Lời cảm ơn</button>
                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">Mã đơn hàng</button>
                    <button class="nav-link" id="download-tab" data-bs-toggle="tab" data-bs-target="#download" type="button" role="tab" aria-controls="download" aria-selected="false">Thông tin người đặt</button>
                    <button class="nav-link" id="payment-method-tab" data-bs-toggle="tab" data-bs-target="#payment-method" type="button" role="tab" aria-controls="payment-method" aria-selected="false">Chi tiết đơn hàng</button>
                  </div>
                </nav>
              </div>
              <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="dashboad" role="tabpanel" aria-labelledby="dashboad-tab">
                    <div class="myaccount-content">
            <div class="row boxcontent" style="text-align:center; min-height: 100px;">
                <h2>Cảm ơn quý khách đã đặt hàng!</h2>
            </div>
            </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <div class="myaccount-content">
                      <h3>Mã đơn hàng</h3>
                      <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Mã đơn hàng</th>
                              <th>Ngày đặt hàng</th>
                              <th>Tổng đơn hàng</th>
                              <th>Phương thức thanh toán</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td><?=$bill['id']?></td>
                                <td> <?=$bill['ngaydathang']?></td>
                                <td><?=$bill['total']?></td>
                                <td> <?=$bill['bill_pttt']?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div style="margin-top:-215px;" class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                    <div class="myaccount-content">
                      <h3>Thông tin đơn hàng</h3>
                      <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Người đặt hàng</th>
                              <th>Địa chỉ</th>
                              <th>Email</th>
                              <th>Điện thoại</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td><?=$bill['bill_name']?></td>
                                <td><?=$bill['bill_address']?></td>
                                <td><?=$bill['bill_email']?></td>
                                <td><?=$bill['bill_tel']?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div style="margin-top:-215px;" class="tab-pane fade" id="payment-method" role="tabpanel" aria-labelledby="payment-method-tab">
                    <div class="myaccount-content">
                      <h3>Chi tiết đơn hàng</h3>
                    </div>
                    <div class="myaccount-table table-responsive text-center" >
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Hình</th>
                              <th>Sản phẩm</th>
                              <th>Đơn giá</th>
                              <th>Số lượng</th>
                              <th>Thành tiền</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <?php
                                     chitiet_bill($billct);
                                ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--== End My Account Wrapper ==-->
  </main>

  

  

  
        
  <!--== End Aside Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jQuery Countdown Min Js ===-->
<script src="assets/js/countdown.js"></script>
<!--=== jQuery Isotope Min Js ===-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!--=== jQuery Range Slider Min Js ===-->
<script src="assets/js/ion.rangeSlider.min.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="assets/js/custom.js"></script>

</body>
