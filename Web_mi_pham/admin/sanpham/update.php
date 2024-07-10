<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

$img_path = "../upload/" . $img;
if (is_file($img_path)) {
    $hinh = "<img style='width: 200px;' src='" . $img_path . "' height='150'>";
} else {
    $hinh = "No photo";
}
?>
<div class="padding-l boxphai margin-b">
    <div class="row formtitle">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row margin-b10">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdm as $dm) {                       
                        if($iddm==$dm['id']){
                            echo '<option value="'.$dm['id'].'" selected>'.$dm['name'].'</option>';
                        }else{
                            echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                        }
                        
                    } ?>
                </select>
            </div>
            <div class="row margin-b10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?=$name?>">
            </div>
            <div class="row margin-b10">
                Giá <br>
                <input type="text" name="giasp" value="<?=$price?>">
            </div>
            <div class="row margin-b10">
                Hình <br>
                <input type="file" name="hinh">
                <?=$hinh?>
            </div>
            <div class="row margin-b10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10" value="<?=$mota?>"></textarea>
            </div>

            <div class="row margin-b10" style="display:inline-block;">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT" style="width: 100px;">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>
</div>