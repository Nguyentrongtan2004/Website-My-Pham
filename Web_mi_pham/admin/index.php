<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";

    include "header.php";
    //controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                // Kiểm tra xem người dùng có click vào nút add không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdm = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    $id = $_GET['id'];
                    $danhmuc = loadone_danhmuc($_GET['id']);
                }              
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'xoadm':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            /** sản phẩm below */
            case 'addsp':
                // Kiểm tra xem người dùng có click vào nút add không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];

                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                         
                    } else {

                    }

                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdm = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $listdm = loadall_danhmuc();
                $listsp = loadall_sanpham($kyw,$iddm);
                include "sanpham/listsp.php";
                break;
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsp = loadall_sanpham("",0);
                include "sanpham/listsp.php";
                break;
            case 'suasp':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }              
                $listdm = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];

                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         
                    } else {

                    }
                    
                    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadall_danhmuc();
                $listsp = loadall_sanpham("",0);
                include "sanpham/listsp.php";
                break;
            case 'dskh':
                $listtk = loadall_taikhoan();
                include "taikhoan/listtk.php";
                break;
            case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    delete_taikhoan($_GET['id']);
                }
                $listtk = loadall_taikhoan();
                include "taikhoan/listtk.php";
                break;
            case 'suatk':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    $taikhoan = loadone_taikhoan($_GET['id']);
                }              
                $listtk = loadall_taikhoan();
                include "taikhoan/edittk.php";
                break;
                break;
            case 'updatetk':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $role = $_POST['role'];
                    
                    update_taikhoan_role($id, $user, $pass, $email, $address, $tel, $role);
                    $thongbao = "Cập nhật thành công";
                }

                $listtk = loadall_taikhoan();
                include "taikhoan/listtk.php";
                break;
            case 'dsbl':
                $listbl = loadall_binhluan(0);
                include "binhluan/listbl.php";
                break;
            case 'xoabl':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                            delete_binhluan($_GET['id']);
                        }
                        $listbl = loadall_binhluan(0);
                        include "binhluan/listbl.php";
                break;
            case 'listbill':
                if (isset($_POST['kyw'])&&($_POST['kyw']!="")) {
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                $listbill = loadall_bill($kyw,0);
                include "bill/listbill.php";
                break;
            case 'suadh':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    $bill = loadone_bill($_GET['id']);
                    $sanpham = loadone_sanpham($_GET['id']);
                }              
                include "bill/update.php";
                break;
            case 'updatedh':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $bill_name = $_POST['user'];
                    $bill_address = $_POST['address'];
                    $bill_tel = $_POST['tel'];
                    $bill_email = $_POST['email'];
                    $total = $_POST['total'];
                    $bill_status = $_POST['status'];
                    $ngaydathang = $_POST['ngaydathang'];
                    
                    update_bill($id, $bill_name, $bill_address, $bill_tel, $bill_email, $total, $bill_status, $ngaydathang);
                    $thongbao = "Cập nhật thành công";
                }
                $listbill = loadall_bill("",0);
                include "bill/listbill.php";
                break;
            case 'xoadh':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    delete_donhang($_GET['id']);
                }
                $listbill = loadall_bill("",0);
                include "bill/listbill.php";
                break;
            case 'thongke':
                $thongke = loadall_thongke();
                include "thongke/list.php";
                break;
            case 'bieudo':
                $bieudo = loadall_thongke();
                include "thongke/bieudo.php";
                break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";
    
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Trang Admin - VHT</title>
</head>
<body>
    <div class="padding-l boxphai margin-b">
        <div class="row formtitle margin-b">
            <h1>Control Page</h1>
        </div>
    </div>
</body>
</html> -->