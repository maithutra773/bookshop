<!DOCTYPE html>
<html>
    <head>
        <style>
            .dangky{
                margin-top: 50px;
                text-align: center;
                font-size: 30px;
            }
            form.noidung11 {
                margin: auto;
                width: 62%;
                margin-top: 20px;
                padding: 10px 20px;
                border: 1px solid #000;
                border-radius: 5px;
            }
            .noidung11 div{
                margin-left: 100px;
            }
            form input.mail123{
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
        <h3 class="dangky">ĐĂNG KÝ THÀNH VIÊN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form class="noidung11"  action="dang-ky.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Tên đăng nhập:</label>
                <input style="margin-left: 49px; border: 1px solid #000;" required="" class="mail123" name="ma_kh" value="<?=$ma_kh?>">
            </div>
            <div>
                <label>Mật khẩu:</label>
                <input style="margin-left: 90px;" required="" class="mail123" name="mat_khau" type="password" value="<?=$mat_khau?>">
            </div>
            <div>
                <label>Xác nhận mật khẩu:</label>
                <input style="margin-left: 19px;" required="" class="mail123" name="mat_khau2" type="password" value="<?=$mat_khau2?>">
            </div>
            <div>
                <label>Họ và tên:</label>
                <input style="margin-left: 86px;" required="" class="mail123" name="ho_ten" value="<?=$ho_ten?>">
            </div>
            <div>
                <label>Địa chỉ email:</label>
                <input style="margin-left: 63px;" required="" class="mail123" name="email" value="<?=$email?>">
            </div>
            <div>
                <label>Hình</label>
                <input name="up_hinh" type="file">
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
            <div>
                <button class="dangnhap13" name="btn_register">Đăng ký</button>
            </div>
            
        </form>
    </body>
</html>
