<!DOCTYPE html>
<html>
    <head>
        <style>
            .dangnhap{
                margin-top: 50px;
                margin-left: 300px;
                font-size: 30px;
            }
            form.noidung11 {
                margin-top: 20px;
                margin-left: 300px;
                width:  650px;
                padding: 10px 20px;
                border: 1px solid #000;
                border-radius: 5px;
            }
            input.mail123{
                margin-top: 20px;
                width: 300px;
                height: 30px;
                border: 1px solid #000;
                border-radius: 5px;
            }
            button.dangnhap13{
                margin-top: 20px;
                width: 100px;
                height: 40px;
                background: white;
                border: 1px solid #000;
                border-radius: 5px;
            }
            button.dangnhap13:hover{
                background: yellow;
            }
        </style>
    </head>
    <body>
        <h3 class="dangnhap">ĐĂNG NHẬP</h3>
        
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form class="noidung11" action="dang-nhap.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input style="margin-left: 30px;" class="mail123" name="ma_kh" value="<?=$ma_kh?>">
            </div>
            <div>
                <label>Mật khẩu</label>
                <input style="margin-left: 70px;" class="mail123" name="mat_khau" type="password" value="<?=$mat_khau?>">
            </div>
            <div>
                <label>
                    <input style="margin-top: 20px;" name="ghi_nho" type="checkbox" checked>
                    Ghi nhớ tài khoản?
                </label>
            </div>
            <div>
                <button class="dangnhap13" name="btn_login">Đăng nhập</button>
            </div>
            <div>
                <li><a href="<?=$SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu?</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
        </form>
    </body>
</html>
