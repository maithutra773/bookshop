<!DOCTYPE html>

<html>
    <head>
        <style>
            .tendangnhap{
                margin-top: 50px;
                margin-left: 340px;
                font-size: 30px;
            }
            .taikhoan{
                width:700px;
                margin: auto;
                border:1px solid #000;
                text-align: center;

            }
            .ma_kh{
                border:1px solid #000;

            }
            button.btn_login{
                margin-top: 20px;
                width: 100px;
                height: 40px;
                background: white;
                border: 1px solid #000;
                border-radius: 5px;
            }
            button.btn_login:hover{
                background: yellow;
            }
        </style>
    </head>
    <body>
        <h3 class='tendangnhap'>TÀI KHOẢN</h3>
        <div class="taikhoan">
            <div>
                <form action="<?=$SITE_URL?>/tai-khoan/dang-nhap.php" method="post">
                    <div>
                        <div>Tên đăng nhập:</div>
                        <input class="ma_kh" name="ma_kh" value="<?=$ma_kh?>">
                    </div>
                    <div>
                        <div>Mật khẩu:</div>
                        <input class="ma_kh" name="mat_khau" type="password" value="<?=$mat_khau?>">
                    </div>
                    <div>
                        <div>
                            <label>
                                <input name="ghi_nho" type="checkbox" checked>
                                Ghi nhớ tài khoản?
                            </label>
                        </div>
                    </div>
                    <div>
                        <button class="btn_login"name="btn_login">Đăng nhập</button>
                    </div>
                    <div>
                        <li><a href="<?=$SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu?</a></li>
                        <li><a href="<?=$SITE_URL?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
                    </div>
                </form>        
            </div>
        </div>        
    </body>
</html>
