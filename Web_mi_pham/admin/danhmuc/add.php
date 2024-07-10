<div class="row boxphai margin-b">
            <div class="row formtitle"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row margin-b10">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row margin-b10">
                        Tên loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row margin-b10" style="display:inline-block;">
                        <input type="submit" name="themmoi" value="THÊM MỚI" style="width: 100px;">
                        <input type="reset" value="NHẬP LẠI" name="reset" style="width: 100px;">
                        <a href="index.php?act=listdm"><input type="button" name="list" value="DANH SÁCH"></a>  
                    </div>
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo $thongbao;

                    ?>
                </form>
            </div>
        </div>
    </div>