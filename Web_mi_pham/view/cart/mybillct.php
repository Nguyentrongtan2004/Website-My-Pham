


<div class="row ">
    <a href="index.php?act=mybill"><i class="fa-solid fa-arrow-right fa-rotate-180 fa-2xl"></i></a>
    <div class="card main-web"><br>
        <h1>Chi Tiết Đơn Hàng</h1><br>
        <table class="frm_dm" style="width: 98%; font-size: 17px; margin-left: 1%;">
            <thead>
                <tr>
                    <th style=" border-bottom:1px solid green; " class="text-center">Mã khách hàng</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Thông Tin khách hàng</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Hình ảnh sản phẩm</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Tên sản phẩm</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Số lượng sản phẩm</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Giá sản phẩm</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Tổng giá trị đơn hàng</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Ngày đặt</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Tình trạng đơn hàng</th>
                    <!-- <th style=" border-bottom:1px solid green" class="text-center">Bill Cỏmim</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listbillct as $value):
                    extract($value);
                    $huydh = "index.php?act=huyhh&id=" . $id;
                    $trangthai = get_ttdh($bill_status);
                    // $soluong = loadall_cart_count($bill_id)
                        ?>
                    <tr>
                        <td style="padding:10px" class="text-center">KH-
                            <?= $iduser; ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $bill_name; ?><br>
                            <?= $bill_address; ?><br>
                            <?= $bill_tel; ?>
                        </td>
                        <td style="padding:10px; width: 20px;" class="text-center"><img style="width: 80px;"
                                src="<?= $img; ?>" alt=""></td>
                        <td style="padding:10px" class="text-center">
                            <?= $name; ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $soluong ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $price ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                        <?= number_format($total) ?>vnd
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $ngaydathang; ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $trangthai ?>
                        </td>
                        <!-- <td class="text-center"><a href="index.php?act=ls_bill">Chi tiết </a></td>  -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <?php

            ?>
        </table>
    </div>
</div>