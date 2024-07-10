<?php
    if (is_array($danhmuc)) {
        extract($danhmuc);
    }

?>
<div class="row boxphai margin-b">
            <div class="row formtitle"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row margin-b10">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row margin-b10">
                        Tên loại <br>
                        <input type="text" name="tenloai" value="<?php if(isset($name) && ($name!="")) echo $name;?>">
                    </div>
                    <div class="row margin-b10" style="display:inline-block;">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id; ?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT" style="width: 100px;">>
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>  
                    </div>
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo $thongbao;

                    ?>
                </form>
            </div>
        </div>
    </div>