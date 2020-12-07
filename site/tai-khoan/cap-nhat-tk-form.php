<!DOCTYPE html>
<html>
<head>
    <style>
        .capnhap{
            text-align: center;
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
        <h3 class="capnhap">CẬP NHẬT TÀI KHOẢN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form class="noidung11" action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <img style="width: 250px;height: 250px; border:1px;
                border-radius:100%;" src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>" style="max-width: 95%">
                </div>
                <div>
                    <div>
                        <label>Tên đăng nhập</label>
                        <input style="margin-left: 50px;" class="mail123" name="ma_kh" value="<?=$ma_kh?>" readonly>
                    </div>
                    <div>
                        <label>Họ và tên</label>
                        <input style="margin-left: 83px;" class="mail123" name="ho_ten" value="<?=$ho_ten?>">
                    </div>
                    <div>
                        <label>Địa chỉ email</label>
                        <input style="margin-left: 59px;" class="mail123" name="email" value="<?=$email?>">
                    </div>
                    <div>
                        <label>Hình</label>
                        <input name="up_hinh" type="file">
                    </div>
                    <div>
                        <button class="dangnhap13" name="btn_update">Cập nhật</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="vai_tro" value="<?=$vai_tro?>" type="hidden">
                    <input name="kich_hoat" value="<?=$kich_hoat?>" type="hidden">
                    <input name="mat_khau" value="<?=$mat_khau?>" type="hidden">
                    <input name="hinh" value="<?=$hinh?>" type="hidden">
                </div>
            </div>
        </form>
    </body>
</html>
