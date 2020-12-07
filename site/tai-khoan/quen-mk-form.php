<!DOCTYPE html>
<html>
    <head>
        <style>
            h3{
            margin-top: 50px;
            margin-left: 300px;
            font-size: 30px;
            }
            form.noidung11 {
            margin-top: 20px;
            margin-left: 300px;
            width:  500px;
            height: 200px;
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
                width: 150px;
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
        <h3>QUÊN MẬT KHẨU</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        
        <form class="noidung11" action="quen-mk.php" method="post">
            <div>
                <label>Tên đăng nhập:</label>
                <input style="margin-left: 21px;"  class="mail123" name="ma_kh">
            </div>
            <div>
                <label>Địa chỉ email:</label>
                <input style="margin-left: 35px;" class="mail123" name="email1">
            </div>
            <div>
                <button class="dangnhap13" name="btn_forgot">Tìm lại mật khẩu</button>
            </div>
        </form>
    </body>
</html>
