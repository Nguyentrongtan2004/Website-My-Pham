<div class="row boxphai margin-b">
    <div class="row formtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row formcontent">
        <div class="row margin-b10 formds">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php foreach($listtk as $tk) {
                    extract($tk);
                    $suatk = "index.php?act=suatk&id=".$id;
                    $xoatk = "index.php?act=xoatk&id=".$id;
                    if ($role==1) {
                        $role = "Admin";
                    }else{
                        $role = "Người dùng";
                    }
                    echo '<tr>
                        <td><input type="checkbox" name="name[]" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td><a href='.$suatk.'><input type="button" value="Sửa"></a> <a href='.$xoatk.'><input type="button" value="Xóa"></a></td>
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