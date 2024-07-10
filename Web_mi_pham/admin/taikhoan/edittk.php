<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}

?>
<?php
if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
}
?>
<div class="padding-l boxphai margin-b">
    <div class="row formtitle">
        <h1>CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatetk" method="post">
            <div class="row margin-b10">
                Tên tài khoản <br>
                <input type="text" name="user" value="<?= $user ?>">
            </div>
            <div class="row margin-b10">
                Mật khẩu <br>
                <input type="password" name="pass" value="<?= $pass ?>">
            </div>
            <div class="row margin-b10">
                Email <br>
                <input type="email" name="email" value="<?= $email ?>">
            </div>
            <div class="row margin-b10">
                Địa chỉ <br>
                <input name="address" value="<?= $address ?>">
            </div>
            <div class="row margin-b10">
                Điện thoại <br>
                <input name="tel" value="<?= $tel ?>">
            </div>
            <div class="row margin-b10">
                Vai trò <br>
                <select style="width: 100%;" class="form-select" name="role" aria-label="Default select example">
                    <option value="0" <?php echo ($role == 0) ? "selected" : ""; ?>>
                        Người dùng
                    </option>
                    <option value="1" <?php echo ($role == 1) ? "selected" : ""; ?>>
                        Admin
                    </option>
                </select>
            </div>
            <div class="row margin-b10" style="display:inline-block;">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT" style="width: 100px;">
                <a href="index.php?act=listtk"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>
</div>