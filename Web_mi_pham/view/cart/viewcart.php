

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
              <h2 class="title">Cart</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Cart</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="shopping-cart-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="shopping-cart-form table-responsive">
                <div class="row boxcontent cart">
                    <table>
                        <?php
                            view_cart(1);
                        ?>

                    </table>
                </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="coupon-wrap">
              <h4 class="title">Mã giảm giá</h4>
              <p class="desc">Nhập mã giảm giá nếu bạn có một cái.</p>
              <input type="text" class="form-control" placeholder="Nhập mã giảm giá ở đây">
              <button type="button" class="btn-coupon">Xác nhận</button>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="cart-totals-wrap">
              <div class="text-end">
                <a href="index.php?act=sanpham" class="checkout-button">TÔI MUỐN MUA THÊM!</a>
                <a href="index.php?act=bill" class="checkout-button">Đến trang thanh toán</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>
</div>



<script>
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;
    // console.log(amount);
    let render = (amount) => {
        amountElement.value = amount
    }
    //HandelPlus
    let handlePlus = () => {
        amount++;
        render(amount);
    }
    //handel Minus
    let handleMinus = () => {
        if (amount > 1)
            amount--;
        render(amount);
    }
    amountElement.addEventListener('input', () => {
        amount = amountElement.value;
        amount = parseInt(amount);
        amount = (isNaN(amount) || amount == 0) ? 1 : amount;
        render(amount);

    });
</script>