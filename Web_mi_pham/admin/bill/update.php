<?php
if (is_array($bill)) {
    extract($bill);
}
$soluong = loadall_cart_count($bill['id']);
?>
<div class="padding-l boxphai margin-b">
    <div class="row formtitle">
        <h1>CẬP NHẬT TRẠNG THÁI ĐƠN HÀNG</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedh" method="post">
      <label for="name" class="form-label">Mã đơn hàng</label>
      <input type="text" class="form-control" name="id" value=" <?= $id; ?>" readonly> 
      <label for="name" class="form-label">Người đặt hàng:</label>
      <input readonly type="text" name="user" value="  <?= $bill_name; ?>" id="">
      <label for="name" class="form-label">Địa chỉ:</label>
      <input readonly type="text" name="address" value=" <?= $bill_address; ?>" id="">
      <label for="name" class="form-label"> Email:</label>
      <input readonly type="text" name="email" value="   <?= $bill_email; ?>" id="">
      <label for="name" class="form-label"> Số điện thoại:</label>
      <input readonly type="text" name="tel" value=" <?= $bill_tel; ?>" id="">
      <label for="name" class="form-label">Số lượng đơn:</label>
      <input readonly type="text" name="soluong" value=" <?= $soluong; ?>" id="">
      <label for="name" class="form-label">Tổng tiền: </label>
      <input readonly type="text" name="total" value="<?= $total; ?>" id="">
      <label for="name" class="form-label"> Ngày đặt: </label>
      <input readonly type="text" name="ngaydathang" value="<?= $ngaydathang; ?>" id="">

    <div class="mb10 ">
      <label for="name" class="form-label">Tình trạng đơn hàng</label>
      <select  style="width: 100%;"  class="form-select" name="status" aria-label="Default select example">
        <option value="0" <?php echo ($bill_status == 0) ? "selected" : ""; ?>>
          Đơn hàng chờ xác nhận
        </option>
        <option value="1" <?php echo ($bill_status == 1) ? "selected" : ""; ?>>
          Đang xử lý
        </option>
        <option value="2" <?php echo ($bill_status == 2) ? "selected" : ""; ?>>
          Đang giao hàng
        </option>
        <option value="3" <?php echo ($bill_status == 3) ? "selected" : ""; ?>>
          Giao hàng thành công
        </option>
        <option value="4" <?php echo ($bill_status == 4) ? "selected" : ""; ?>>
          Đã hủy
        </option>
      </select>
    </div>
            <div class="row margin-b10">
                <!-- 
                    0. Đơn hàng mới
                    1. Đang xử lý
                    2. Đang giao hàng
                    3. Giao hàng thành công
                    4. Đã hủy
                 -->
            </div>
            <div class="row margin-b10" style="display:inline-block;">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT" style="width: 100px;">
                <a href="index.php?act=listbill"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>
</div>