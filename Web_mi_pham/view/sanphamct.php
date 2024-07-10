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
      <?php
      extract($onesp);

      ?>
      <?php
      $hinh = $img_path . $img
      ?>
      <!--== Start Page Header Area Wrapper ==-->
      <div class="page-header-area" data-bg-img="assets/img/photos/bg1.webp">
        <div class="container pt--0 pb--0">
          <div class="row">
            <div class="col-12">
              <div class="page-header-content">
                <h2 class="title">Sản phẩm</h2>
                <nav class="breadcrumb-area">
                  <ul class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-sep">//</li>
                    <li>Sản phẩm</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--== End Page Header Area Wrapper ==-->

      <!--== Start Product Single Area Wrapper ==-->
      <section class="product-area product-single-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="product-single-item">
                <div class="row">
                  <div class="col-lg-6">
                    <!--== Start Product Thumbnail Area ==-->
                    <div class="product-single-thumb">
                      <div class="swiper single-product-thumb single-product-thumb-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <a class="lightbox-image" data-fancybox="gallery" href="<?= $hinh ?>">
                              <img src="<?= $hinh ?>" width="570" height="675" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/2.jpg">
                              <img src="assets/img/shop/product-single/2.jpg" width="570" height="675" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/3.jpg">
                              <img src="assets/img/shop/product-single/3.jpg" width="570" height="675" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/4.jpg">
                              <img src="assets/img/shop/product-single/4.jpg" width="570" height="675" alt="Image-HasTech">
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-single-swiper-wrap position-relative">
                        <div class="swiper single-product-nav single-product-nav-slider">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img src="<?= $hinh ?>" width="127" height="127" alt="Image-HasTech">
                            </div>
                            <div class="swiper-slide">
                              <img src="assets/img/shop/product-single/nav2.jpg" width="127" height="127" alt="Image-HasTech">
                            </div>
                            <div class="swiper-slide">
                              <img src="assets/img/shop/product-single/nav3.jpg" width="127" height="127" alt="Image-HasTech">
                            </div>
                            <div class="swiper-slide">
                              <img src="assets/img/shop/product-single/nav4.jpg" width="127" height="127" alt="Image-HasTech">
                            </div>
                          </div>
                        </div>
                        <!--== Add Swiper Arrows ==-->
                        <div class="single-swiper-btn-wrap">
                          <div class="swiper-btn-prev">
                            <i class="fa fa-angle-left"></i>
                          </div>
                          <div class="swiper-btn-next">
                            <i class="fa fa-angle-right"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End Product Thumbnail Area ==-->
                  </div>
                  <div class="col-lg-6">
                    <!--== Start Product Info Area ==-->
                    <div class="product-single-info">
                      <h3 class="main-title"><?= $name ?></h3>
                      <div class="prices">
                        <span class="price"><?= $price ?> VNĐ</span>
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
                      <p><?= $mota ?></p>

                      <div class="product-quick-action">
                      <?php
                        echo '
                        <form action="index.php?act=addtocart" method="post">
                            <input style="width: 40px; text-align:center;" type="text" name="" onclick="handleMinus()" value="-" readonly>
                            <input style="width: 40px; text-align:center;" type="text" name="amount" id="amount" value="1">
                            <input style="width: 40px; text-align:center;" type="text" name="" onclick="handlePlus()" value="+" readonly>
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="btn-product-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                        </form>';
                        ?>



                        <button type="button" class="btn-product-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                          <i class="pe-7s-like"></i>
                        </button>
                        <button type="button" class="btn-product-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                          <i class="pe-7s-look"></i>
                        </button>
                      </div>


                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                      <script>
                        $(document).ready(function() {
                          $("#binhluan").load("view/binhluan/binhluanform.php", {
                            idpro: <?= $id ?>
                          });
                        });
                      </script>



                      <div class="product-review-tabs-content">
                        <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                          <li role="presentation">
                            <a class="active" id="information-tab" data-bs-toggle="pill" href="#information" role="tab" aria-controls="information" aria-selected="true">Information</a>
                          </li>
                          <li role="presentation">
                            <a id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
                          </li>
                          <li role="presentation">
                            <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (05)</a>
                          </li>
                        </ul>
                        <div class="tab-content product-tab-content" id="ReviewTabContent">
                          <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <div class="product-information">
                              <p><?= $mota ?></p>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-description">
                              <p><?= $mota ?></p>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-review-content">
                              <!-- <div class="comment-author">
                                <div class="comment-thumb">
                                  <img src="assets/img/shop/avatar.jpg" width="60" height="60" alt="Image-HasTech">
                                </div>
                                <div class="comment-content">
                                  <div class="rating-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                  </div>
                                  <h4 class="title"><span>Admin</span> - April 8, 2022</h4>
                                  <p class="desc">Uống như ***</p>
                                </div>
                              </div>
                              <div class="comment-form-content">
                                <h4 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#comment-widgetId-1">Thêm bình luận</h4>
                                <div id="comment-widgetId-1" class="collapse collapse-body">
                                  <div class="review-comment-form">
                                    <form action="#">
                                          
                                    </form>
                                  </div>
                                </div>
                              </div> -->
                              <div class="row review-comment-form" id="binhluan">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <!--== End Product Info Area ==-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Product Single Area Wrapper ==-->

      <!--== Start Product Area Wrapper ==-->
      <section class="product-area product-default-area">
        <div class="container pt--0">
          <div class="row">
            <div class="col-12">
              <div class="section-title shape-center text-center">
                <h5 class="sub-title">Sản phẩm tốt nhất</h5>
                <h2 class="title">Sản phẩm cùng loại</h2>
              </div>
            </div>
          </div>
          <div class="row">

            <!--== Start Product Item ==-->
            <?php
            foreach ($spcungloai as $spcungloai) {
              extract($spcungloai);
              $linksp = "index.php?act=sanphamct&idsp=" . $id;
              $hinh = $img_path . $img;
              echo '<div class="col-sm-6 col-lg-3">
                                <div class="product-item"> 
                                  <div class="product-thumb">
                                    <a href="' . $linksp . '">
                                      <img src="' . $hinh . '" width="250" height="300" alt="Image-HasTech">
                                    </a>
                                  </div>
                                  <div class="product-info">
                                    <h4 class="title"><a href="single-product.html">' . $name . '</a></h4>
                                    <div class="prices">
                                      <span class="price">' . $price . ' VNĐ</span>
                                    </div>
                                  </div>
                                  <div class="product-action">
                                        <form action="index.php?act=addtocart" method="POST">
                                            <input type="hidden" name="amount" id="amount" value="1">
                                            <input type="hidden" name="id" value="' . $id . '">
                                            <input type="hidden" name="name" value="' . $name . '">
                                            <input type="hidden" name="img" value="' . $img . '">
                                            <input type="hidden" name="price" value="' . $price . '">
                                            <button type="submit" name="addtocart" value="Add">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="25" viewBox="0 0 576 512">
                                            <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/>
                                            </svg>
                                            </button>
                                      </form>  
                                    
                                    <div class="product-action-links">
                                      <button type="button" class="btn-product-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <i class="pe-7s-shopbag"></i>
                                      </button>
                                      <button type="button" class="btn-product-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="pe-7s-look"></i>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>';
            }
            ?>
            <!--== End prPduct Item ==-->
          </div>
        </div>
  </div>
  </section>
  <!--== End Product Area Wrapper ==-->
  </main>


  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>


  <!--== End Product Quick View Modal ==-->

  </div>


</body>



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