<!DOCTYPE html>
<html>
    <head>
        <style>
            .tendangnhap{
                text-align: center;
            }
            .taikhoan-info{
                text-align: center;
                width:500px;
                margin: auto;
                border:1px solid #000;
                text-align: center;

            }
            .anhdaidien{
                margin-left: 140px;
                width:200px;
                height:200px;
                border:1px;
                border-radius:100%;
            }
        </style>
    </head>
    <body>
        <h3 class="tendangnhap">TÀI KHOẢN</h3>
        <div class="taikhoan-info">
            
            <div> 
                <div>
                    <img class="anhdaidien" src='<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>'>
                    <br>
                    <?= $_SESSION['user']['ho_ten']?>
                </div>
                <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['user']['vai_tro'] == TRUE){
                        echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                    }
                ?>
            </div>
        </div>        
    </body>
</html>
