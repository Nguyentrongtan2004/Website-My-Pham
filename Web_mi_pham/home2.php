<main class="main-content">
  <!--== Start Hero Area Wrapper ==-->
  <section class="home-slider-area">
    <div class="swiper home-slider-container default-slider-container">
    <div class="swiper-wrapper home-slider-wrapper slider-default">
        <div class="swiper-slide">
          <div class="slider-content-two-area" data-bg-img="assets/img/slider/baner6.jpg">
            <div class="container">
              <div class="slider-container">

              </div>
            </div>
            <div class="home-overlay"></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-content-area" data-bg-img="assets/img/slider/baner5.jpg">
            <div class="container">
              <div class="slider-container">
                <div class="row justify-content-between align-items-center">
                  <div class="col-sm-6 col-md-6">
                    <div class="slider-content">
                      <div class="content">
                        <div class="sub-title-box">
                          <h5 class="sub-title">Up To 40% Off</h5>
                        </div>
                        <div class="title-box">
                          <h2 class="title">Cải thiện vóc dáng</h2>
                        </div>
                        <div class="btn-box">
                          <a class="btn-theme text-dark" href="index.php?act=sanpham">MUA NGAY</a>
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

      <!--== Add Swiper Arrows ==-->
      <div class="swiper-btn-wrap">
        <div class="swiper-btn-prev">
          <i class="pe-7s-angle-left"></i>
        </div>
        <div class="swiper-btn-next">
          <i class="pe-7s-angle-right"></i>
        </div>
      </div>
    </div>
  </section>
  <!--== End Hero Area Wrapper ==-->

  <!--== Start Feature Area Wrapper ==-->
  <!--== End Feature Area Wrapper ==-->

  <!--== Start About Area Wrapper ==-->
  <section class="about-area">
    <div class="container">
      <div class="about-item position-relative">
        <div class="row align-items-center">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="about-content">
              <div class="section-title shape-left">
                <h5 class="sub-title">Uy tín chất lượng</h5>
                <h2 class="title">Mỹ Phẩm ĐANN</h2>
              </div>
              <p>Mỹ phẩm ĐANN không chỉ là một cửa hàng mĩ phẩm, mà là nguồn cảm hứng để bạn tự tin bộc lộ vẻ đẹp tự nhiên của mình. Chúng tôi cam kết mang lại trải nghiệm mua sắm thoải mái và đáng nhớ, nơi bạn có thể tận hưởng sự đa dạng và chất lượng của các sản phẩm.</p>
              <p>Điểm nổi bật sản phẩm trên trang web được chọn lựa kỹ lưỡng từ các thương hiệu nổi tiếng, đảm bảo chất lượng và hiệu quả.Đội ngũ chăm sóc khách hàng của chúng tôi luôn sẵn sàng hỗ trợ và tư vấn, giúp bạn chọn lựa sản phẩm phù hợp với làn da và nhu cầu cá nhân.Chúng tôi thường xuyên cập nhật các chương trình khuyến mãi và ưu đãi, giúp bạn tiết kiệm hơn khi mua sắm trên trang web của chúng tôi.</p>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <div class="about-thumb">
              <img src="assets/img/logo/logo1.png" width="569" height="577" alt="Image-HasTech">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-area product-default-area">
    <div class="container pt--0">
      <div class="row">
        <div class="col-12">
          <div class="section-title mb-45 mb-sm-20 shape-center text-center">
            <h5 class="sub-title">Uy tín chất lượng</h5>
            <h2 class="title">Mỹ phẩm ĐANN</h2>
          </div>
        </div>
      </div>
      <div class="row isotope-grid">
        
            <?php
            // include "global.php";
            // include "model/sanpham.php";
            $spnew = loadall_sanpham_home();
            $i = 0;
            foreach ($spnew as $sp) {
              extract($sp);
              $linksp = "index.php?act=sanphamct&idsp=" . $id;
              $hinh = $img_path . $img;
              echo '<div class="col-sm-6 col-lg-3 isotope-item filter_new filter_best_sellers">
                        <div class="product-item">
                            <div class="product-thumb" >
                              <a href="' . $linksp . '">
                                <img src="' . $hinh . '" width="270" height="320" alt="anhsp">
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
                                  <!-- Biểu tượng giỏ hàng SVG của bạn -->
                                  <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/>
                                  </svg>
                                  </button>
                                </form>                                                        
                            </div>
                        </div>
                      </div>';
              $i += 1;
            } ?>
              <!--== End prPduct Item ==-->
          </div>
        </div>
      </div>
  </section>
  <!--== End Product Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

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
                  <?php 
                      $onesp = loadone_sanpham($id);
                      extract($onesp); 
                      $hinh = $img_path . $img

                  ?>
                  <!--== Start Product Thumbnail Area ==-->
                  <div class="product-single-thumb">
                    <img src="<?= $hinh ?>" width="544" height="560" alt="Image-HasTech">
                  </div>
                 
                </div>
                <div class="col-lg-6">
                  <!--== Start Product Info Area ==-->
                  <div class="product-single-info">
                    <h3 class="main-title"><?= $name ?></h3>
                    <div class="prices">
                      <span class="price"><?= $price ?></span>
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
                      <div class="qty-wrap">
                        <div class="pro-qty">
                          <input type="text" title="Quantity" value="01">
                        </div>
                      </div>
                      <form action="index.php?act=addtocart" method="post">
                        <?php 
                          echo '
                                <input type="hidden" name="amount" id="amount" value="1">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="img" value="' . $img . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <button name="addtocart" type="submit" value="Add" class="btn-product-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="25" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/>
                                </svg>
                                </button>';
                        ?>
                      </form>
                      
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

</main>