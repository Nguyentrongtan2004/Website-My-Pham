<div class="row boxphai margin-b">
    <div class="row formtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>

    <div class="row formcontent">
        <div class="row margin-b10 formds">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                
                <?php
                    foreach ($thongke as $tk) {
                        extract($tk);


                        echo '<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td>
                            </tr>';
                    }
                ?>

                
                
            </table>
        </div>
        <div class="row margin-b10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
        </div>
    </div>
</div>