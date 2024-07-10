<div class="row boxphai margin-b">
    <div class="row formtitle margin-b">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row formcontent">
        <div class="row margin-b10 formds">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NỘI DUNG</th>
                    <th>IDUSER</th>
                    <th>IDPRO</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th></th>
                </tr>
                <?php foreach($listbl as $bl) {
                    extract($bl);
                    $suabl = "index.php?act=suabl&id=".$id;
                    $xoabl = "index.php?act=xoabl&id=".$id;
                    echo '<tr>
                        <td><input type="checkbox" name="name[]" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td><a href='.$suabl.'><input type="button" value="Sửa"></a> <a href='.$xoabl.'><input type="button" value="Xóa"></a></td>
                    </tr>';
                }?>
                
            </table>
        </div>
        <div class="row margin-b10" style="display:inline-block;">
            <input type="button" id="btn1" value="Chọn tất cả" style="width: 90px;">
            <input type="button" id="btn2" value="Bỏ chọn tất cả" style="width: 100px;">
            <input type="button" value="Xóa các mục đã chọn" style="width: 140px;">
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