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
              <h2 class="title">Checkout</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Checkout</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Shopping Checkout Area Wrapper ==-->
    <section class="shopping-checkout-wrap">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="checkout-page-coupon-wrap">
              <!--== Start Checkout Coupon Accordion ==-->
              <div class="coupon-accordion" id="CouponAccordion">
                <div class="card">
                  <h3>
                    <i class="fa fa-info-circle"></i>
                    Có mã giảm giá?
                    <a href="#/" data-bs-toggle="collapse" data-bs-target="#couponaccordion">Nhấn vào đây để nhập mã giảm giá</a>
                  </h3>
                  <div id="couponaccordion" class="collapse" data-bs-parent="#CouponAccordion">
                    <div class="card-body">
                      <div class="apply-coupon-wrap">
                        <p>Nhập mã giảm giá nếu bạn có một cái.</p>
                        <form action="#" method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input class="form-control" type="text" placeholder="Mã giảm giá">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <button type="button" class="btn-coupon">Xác nhận</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--== End Checkout Coupon Accordion ==-->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <!--== Start Billing Accordion ==-->
            <div class="checkout-billing-details-wrap">
              <h2 class="title">Thông tin người mua</h2>
              <div class="billing-form-wrap">
                <?php

                if (isset($_SESSION['user'])) {
                  $user = $_SESSION['user']['user'];
                  $address = $_SESSION['user']['address'];
                  $email = $_SESSION['user']['email'];
                  $tel = $_SESSION['user']['tel'];
                } else {
                  $user = "";
                  $address = "";
                  $email = "";
                  $tel = "";
                }

                ?>
                <form action="index.php?act=billconfirm" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="f_name">Tên người đặt hàng<abbr class="required" title="required">*</abbr></label>
                        <input id="f_name" type="text" name="user" class="form-control" value="<?=$user?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input id="phone" type="text" name="tel" value="<?=$tel?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group" data-margin-bottom="30">
                        <label for="email">Email<abbr class="required" title="required">*</abbr></label>
                        <input id="email" name="email" value="<?=$email?>" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="street-address">Địa chỉ <abbr class="required" title="required">*</abbr></label>
                        <input id="street-address" name="address" type="text" class="form-control" placeholder="House number and street name" value="<?=$address?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb--0">
                        <label for="order-notes">Order notes (optional)</label>
                        <textarea id="order-notes" name="note" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
            <!--== End Billing Accordion ==-->
          </div>
          <div class="col-lg-6">
            <!--== Start Order Details Accordion ==-->
            <div class="checkout-order-details-wrap">
              <div class="order-details-table-wrap table-responsive">
                <h2 class="title mb-25">Thông tin đơn hàng</h2>
                <table class="table">
                  <?php
                  view_cart(0);
                  ?>
                </table>
                <div class="shop-payment-method">
                  <div id="PaymentMethodAccordion">
                    <div class="card">
                      <div class="card-header" id="check_payments">
                        <h5 data-bs-toggle="collapse" data-bs-target="#itemOne" aria-controls="itemOne" aria-expanded="true"><input type="radio" value="1" name="pttt" checked> Chuyển khoản ngân hàng</h5>
                      </div>
                      <div id="itemOne" class="collapse show" aria-labelledby="check_payments" data-bs-parent="#PaymentMethodAccordion">
                        <div class="card-body">
                          <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="check_payments3">
                        <h5 data-bs-toggle="collapse" data-bs-target="#itemThree" aria-controls="itemTwo" aria-expanded="false"><input type="radio" value="2" name="pttt"> Thanh toán khi nhận hàng</h5>
                      </div>
                      <div id="itemThree" class="collapse" aria-labelledby="check_payments3" data-bs-parent="#PaymentMethodAccordion">
                        <div class="card-body">
                          <p>Thanh toán tiền mặt với shipper khi nhận hàng.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="check_payments4">
                        <h5 data-bs-toggle="collapse" data-bs-target="#itemFour" aria-controls="itemTwo" aria-expanded="false"><input type="radio" value="3" name="pttt"> Thanh toán với thẻ tín dụng</h5>
                      </div>
                      <div id="itemFour" class="collapse" aria-labelledby="check_payments4" data-bs-parent="#PaymentMethodAccordion">
                        <div class="card-body">
                          <p>Nôn thẻ tín dụng hoặc ghi nợ ra đây.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="p-text">Thông tin của bạn sẽ được dùng để hỗ trợ trong việc giao hàng, đồng thời giúp cho trải nghiệm của bạn với website. Mọi chi tiết đã được nêu tại <a href="#/">chính sách quyền riêng tư của chúng tôi.</a></p>
                  <div class="agree-policy">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="privacy" class="custom-control-input visually-hidden">
                      <label for="privacy" class="custom-control-label">Tôi đã đọc và đồng ý với điều khoản dịch vụ của website<span class="required">*</span></label>
                    </div>
                  </div>
                  <a><input type="submit" name="dongydathang" value="Đặt hàng" class="btn-place-order"></a>
                </div>
              </div>
            </div>
            </form>
            <!--== End Order Details Accordion ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Shopping Checkout Area Wrapper ==-->
  </main>



</div>