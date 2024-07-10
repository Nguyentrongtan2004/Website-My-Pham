<div class="row boxphai margin-b">
            <div class="row formtitle"><h1>THÊM MỚI SẢN PHẨM</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row margin-b10">
                        Danh mục <br>
                        <select name="iddm">
                            <?php foreach($listdm as $dm){
                                extract($dm);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            } ?>
                            
                        </select>
                    </div>
                    <div class="row margin-b10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row margin-b10">
                        Giá <br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row margin-b10">
                        Hình <br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="row margin-b10">
                        Mô tả <br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>

                    <div class="row margin-b10" style="display:inline-block;">
                        <input type="submit" name="themmoi" value="THÊM MỚI" style="width: 100px;">
                        <input type="reset" value="NHẬP LẠI" name="reset" style="width: 100px;">
                        <a href="index.php?act=listsp"><input type="button" name="list" value="DANH SÁCH"></a>  
                    </div>
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo $thongbao;

                    ?>
                </form>
            </div>
        </div>
    </div>