<div class="row boxphai margin-b">
    <div class="row formtitle margin-b">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row formcontent">
        <div class="row margin-b10 formds">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php foreach($listdm as $dm) {
                    extract($dm);
                    $suadm = "index.php?act=suadm&id=".$id;
                    $xoadm = "index.php?act=xoadm&id=".$id;
                    echo '<tr>
                        <td><input type="checkbox" name="name[]" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href='.$suadm.'><input type="button" value="Sửa"></a> <a href='.$xoadm.'><input type="button" value="Xóa"></a></td>
                    </tr>';
                }?>
                
            </table>
        </div>
        <div class="row margin-b10" style="display:inline-block;">
            <input type="button" id="btn1" value="Chọn tất cả" style="width: 90px;">
            <input type="button" id="btn2" value="Bỏ chọn tất cả" style="width: 100px;">
            <input type="button" value="Xóa các mục đã chọn" style="width: 140px;">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
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