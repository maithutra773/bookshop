<!DOCTYPE html>
<html>
    <head>
        <style>
            .doimk{
            margin-top: 30px;
            margin-left: 300px;
            font-size: 30px;
            }
            form.noidung11 {
            margin-top: 20px;
            margin-left: 300px;
            width:  700px;
            padding: 10px 20px;
            border: 1px solid #000;
            border-radius: 5px;
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
        <h3 class="doimk">ĐỔI MẬT KHẨU</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form class="noidung11" action="doi-mk.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input style="margin-left: 60px;" class="mail123" name="ma_kh">
            </div>
            <div>
                <label>Mật khẩu cũ</label>
                <input style="margin-left: 76px;" class="mail123" name="mat_khau" type="password">
            </div>
            <div>
                <label>Mật khẩu mới</label>
                <input style="margin-left: 66px;" class="mail123" name="mat_khau2" type="password">
            </div>
            <div>
                <label>Xác nhận mật khẩu mới</label>
                <input class="mail123" name="mat_khau3" type="password">
            </div>
            <div>
                <button class="dangnhap13" name="btn_change">Đổi mật khẩu</button>
            </div>
        </form>
        
    </body>
</html>
