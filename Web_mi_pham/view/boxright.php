<div class="col-xl-3">
  <div class="shop-sidebar">
    <div class="shop-sidebar-search">
      <div class="sidebar-search-form">
        <form action="index.php?act=sanpham" method="POST">
          <input type="search" placeholder="Search Here" name="kyw">
          <input type="submit" name="timkiem" value="Tìm">
        </form>
      </div>
    </div>

    <div class="shop-widget shop-sidebar-category">
      <h4 class="sidebar-title">Danh mục</h4>
      <div class="sidebar-category">
        <ul class="category-list mb--0">
          <?php
          $dsdm = loadall_danhmuc();
          foreach ($dsdm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=sanpham&iddm=" . $id;
            echo '<li>
                                  <a href="' . $linkdm . '">' . $name . '</a>
                                  </li>';
          } ?>
        </ul>
      </div>
    </div>
    <div class="shop-widget shop-sidebar-tags">
      <h4 class="sidebar-title">Tags</h4>
      <div class="sidebar-tags">
        <ul class="tags-list mb--0">
          <?php
          $dsdm = loadall_danhmuc();
          foreach ($dsdm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=sanpham&iddm=" . $id;
            echo '<li>
                                  <a href="' . $linkdm . '">' . $name . '</a>
                                  </li>';
          } ?>
        </ul>
      </div>
    </div>
  </div>
</div>