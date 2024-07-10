<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/cart.php";
include "header2.php";
include "global.php";

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop6 = loadall_sanpham_top6();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $spcungloai = loadone_sanpham_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "home2.php";
            }

            break;

        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đăng ký thành công, vui lòng đăng nhập để thực hiện chức năng hoặc đặt hàng!";
            }

            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao = "Đăng nhập thành công!";
                    include "view/taikhoan/account.php";
                } else {
                    $thongbao = "Tên đăng nhập hoặc mật khẩu không đúng, vui lòng kiểm tra lại!";
                }
            }
            if (!is_array($checkuser)) {
                include "view/taikhoan/dangnhap.php";
            } else {
                $_SESSION['user'] = $checkuser;
                // $thongbao = "Đăng nhập thành công!";
            }

            break;
        case 'account':

            include "view/taikhoan/account.php";
            break;
        case 'edittk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header("Location: index.php?act=edittk");
            }

            include "view/taikhoan/edittk.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại!";
                }
            }

            include "view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            include "view/taikhoan/dangnhap.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = $_POST['amount'];
                    $product_exists = false;    
                    foreach($_SESSION['mycart'] as &$item) {
                        if ($item[0] == $id) {
                            $item[4] += $soluong; // Tăng số lượng
                            $item[5] = $item[4] * $item[3]; // Cập nhật tổng tiền
                            $product_exists = true;
                            break;
                        }
                    }

                    if (!$product_exists) {
                        $ttien = $soluong * $price;
                        $sanphamadd = [$id, $name, $img, $price, $soluong, $ttien];
                        array_push($_SESSION['mycart'], $sanphamadd);
                    }


                    // echo "<pre>";
                    //     var_dump($_SESSION['my_cart']);
                    //     die;
                
                
            }
            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            // header('Location: index.php?act=addtocart');
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':

            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $id = 0;
                }
                $name = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();

                // tao bill
                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

                // insert into cart : $session['mycart'] & idbill

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }

                // xoa session cart
                $_SESSION['cart'] = [];
            }

            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            $listbill = loadall_bill($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;


        case 'menu':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $tendm = load_menu_danhmuc($id);

            include "view/menu/trasua.php";
            break;
        default:
            include "home2.php";
            break;
    }
} else {
    include "home2.php";
}
include "footer2.php";
