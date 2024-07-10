<div class="row boxphai margin-b">
    <div class="row formtitle margin-b">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdm as $dm) {
                extract($dm);
                echo '<option value="'.$id.'">'.$name.'</option>';
            } ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row formcontent">
        <div class="row margin-b10 formds">

            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php foreach ($listsp as $sp) {
                    extract($sp);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $img_path = "../upload/" . $img;
                    if (is_file($img_path)) {
                        $hinh = "<img src='" . $img_path . "' height='80'>";
                    } else {
                        $hinh = "No photo";
                    }
                    echo '<tr>
                        <td><input type="checkbox" name="name[]" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $luotxem . '</td>
                        <td><a href=' . $suasp . '><input type="button" value="Sửa"></a> <a href=' . $xoasp . '><input type="button" value="Xóa"></a></td>
                    </tr>';
                } ?>

            </table>
        </div>
        <div class="row margin-b10" style="display:inline-block;">
            <input type="button" id="btn1" value="Chọn tất cả" style="width: 90px;">
            <input type="button" id="btn2" value="Bỏ chọn tất cả" style="width: 100px;">
            <input type="button" value="Xóa các mục đã chọn" style="width: 140px;">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>


<script language="javascript">
 
            // Chức năng chọn hết
            document.getElementById("btn1").onclick = function () 
            {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('name[]');
 
                // Lặp và thiết lập checked
                for (var i = 0; i < checkboxes.length; i++){
                    checkboxes[i].checked = true;
                }
            };
 
            // Chức năng bỏ chọn hết
            document.getElementById("btn2").onclick = function () 
            {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('name[]');
 
                // Lặp và thiết lập Uncheck
                for (var i = 0; i < checkboxes.length; i++){
                    checkboxes[i].checked = false;
                }
            };
 
</script>