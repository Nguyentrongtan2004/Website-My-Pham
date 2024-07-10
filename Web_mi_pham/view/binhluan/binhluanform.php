<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    // $iduser = $_SESSION['user']['id'];
    $idpro = $_REQUEST['idpro'];

    $dsbl = loadall_binhluan($idpro);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        .boxtitle{
        font-size: larger;
        color: #333;
        padding: 10px;
        background-color: #EEE;
        border-top-left-radius: 5px; 
        border-top-right-radius: 5px; 
        border: 1px #CCC solid;  
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="row margin-b">
        <div class="boxtitle" style="font-weight: 700;">BÌNH LUẬN</div>
            <div class="boxcontent-mid binhluan">
                <ul>
                    <table>

                    <tr>
                        <td><strong>User</strong></td>
                        <td><strong>Nội dung bình luận</strong></td>
                        <td><strong>Thời gian</strong></td>
                    </tr>

                    <tr>
                        <td>------</td>
                        <td>----------------------</td>
                        <td>-----------</td>
                    </tr>


                    <?php 
                        foreach ($dsbl as $bl) {
                            extract($bl);
                            echo '<tr><td>'.$iduser.'</td>';
                            echo '<td>'.$noidung.'</td>';
                            echo '<td>'.$ngaybinhluan.'</td></tr>';

                    } ?>
                    </table>
                </ul>
            </div>
        <div class="boxfooter binhluanform">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                
                <?php
                    if (isset($_SESSION['user'])) {
                        echo '<div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="ReviewComment" class="form-label">Your review *</label>
                            <input type="text" placeholder="Nhập nội dung bình luận" name="noidung" id="ReviewComment" class="form-control">
                          </div>
                        </div>
        
                        <div class="col-md-12">
                          <div class="form-group mb--0">
                            <input name="guibinhluan" type="submit" value="Submit">
                          </div>
                        </div>
                        
                      </div>';
                    }else{
                        echo "Vui lòng đăng nhập để có thể để lại bình luận";
                    }
                ?>
            </form>
        </div>

                    <?php
                        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                            $noidung = $_POST['noidung'];
                            $idpro = $_POST['idpro'];
                            $ngaybinhluan = date('h:i:sa d/m/Y');
                            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                            header("Location: ".$_SERVER['HTTP_REFERER']);
                        }
                    ?>
    </div>
</body>
</html>