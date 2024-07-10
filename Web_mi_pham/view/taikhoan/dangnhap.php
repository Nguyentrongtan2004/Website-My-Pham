
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
              <h2 class="title">Đăng nhập</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.php?act=dangky">Đăng ký</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Đăng nhập</li>
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
            <div class="login-form-content">
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
             } else { 
            ?> 
              <form method="POST" action="index.php?act=dangnhap">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Username <span class="required">*</span></label>
                      <input id="username" name="user" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password">Password <span class="required">*</span></label>
                      <input name="pass" id="password" class="form-control" type="password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input type="submit" class="btn-login" name="dangnhap" value="Đăng nhập"> 
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group account-info-group mb--0">
                      <div class="rememberme-account">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Remember me</label>
                        </div>
                      </div>
                      <a class="lost-password" href="index.php?act=quenmk">Lost your password?</a>
                    </div>
                  </div>
                </div>
              </form>
              <?php } ?>
      
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End My Account Area Wrapper ==-->
</div>