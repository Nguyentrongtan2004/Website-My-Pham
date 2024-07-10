<div class="row margin-b">
    <div class="boxtrai margin-r">
        <div class="row margin-b">
           
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent formtk">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row margin-b10">
                        Email:
                        <input type="email" name="email">
                    </div>
                    <div class="row margin-b10">
                        <input type="submit" value="Gửi" name="guiemail">
                        <input type="reset" value="Nhập lại">
                    </div>      
                </form>
                <h2 class="thongbao">
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
        
    </div>
    <div class="boxphai">
       <?php include "view/boxright.php";?>
    </div>
</div>