<!DOCTYPE html>
<html>
    <head>
        <style>
          h1 {
                padding: 30px;
                margin-left: 20px;
                border: rgb(218, 95, 115);
                margin-top: 15px;
                border-radius: 10px;
                width: 1120px;
                color: #fff;
                height: 130px;
                background: rgb(218, 95, 115);
            }

            nav {
                margin-left: 20px;
                border: #000;
                margin-top: 15px;
                padding: 20px;
                border-radius: 10px;
                width: 1140px;
                background: #000;
                height: 30px;
            }

            nav a {
                padding: 10px 20px;
                padding-top: 35px;
                color: #fff;
                text-decoration: none;
            }
            div.tensp h3 {
                margin-left: 20px;
                border: rgb(13, 192, 28);
                margin-top: 15px;
                padding: 10px 20px;
                border-radius: 10px;
                width: 1140px;
                background: rgb(13, 192, 28);
                height: 30px;
            }
            form{
                width: 900px;
                height: 870px;
                background: #85f81f;
                margin-left: 220px;
                border: 1px;
                border-radius: 10px;
                margin-top: 30px;
            }
            form div div{
                padding-bottom: 0px;
                padding-top: 25px;
            }
            form div div label{
                margin-left: 80px;
            }
            form div div  button{
                margin-left: 60px;
                width: 120px;
                height: 30px;
                border:1px solid #000;
                border-radius: 5px;
            }
            form div div  button:hover{
                background: yellow;
            }
            form div div input.thenhap{
                width: 500px;
                height: 50px;
                border: 1px solid #000;
                border-radius: 10px ;
            }
            form div div a.danhsach{
                margin-left: 60px;
                width: 400px;
                height: 30px;
                border:1px solid #000;
                border-radius: 5px;
                padding-right: 20px;
                padding-left: 20px;
                padding-bottom: 13px;
                padding-top: 10‒;
                padding-top: 7px;
                text-decoration: none;
                color: #000;
            }
            form div div a.danhsach:hover{
                background: yellow;
            }
            form div div.mahang{
                margin-top: 20px;
                padding-bottom: 0px;
                padding-top: 23px;
            }
        </style>
    </head>
    <body>
        <h3>QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <label>MÃ KHÁCH HÀNG:</label>
                    <input style="margin-left: 50px;" class="thenhap" name="ma_kh">
                </div>
                <div>
                    <label>HỌ VÀ TÊN:</label>
                    <input style="margin-left: 102px;" class="thenhap" name="ho_ten">
                </div>
            </div>
            <div>
                <div>
                    <label>MẬT KHẨU:</label>
                    <input style="margin-left: 102px;" class="thenhap" name="mat_khau" type="password">
                </div>
                <div>
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input style="margin-left: 16px;" class="thenhap" name="mat_khau2" type="password">
                </div>
            </div>
            <div>
                <div>
                    <label>ĐỊA CHỈ EMAIL:</label>
                    <input style="margin-left: 74px;" class="thenhap" name="email">
                </div>
                <div>
                    <label>HÌNH ẢNH:</label>
                    <input  name="hinh" type="file">
                </div>
            </div>
            <div>
                <div>
                    <label>KÍCH HOẠT?</label>
                    <div>
                        <label><input style="margin-left: 180px; width: 30px; height: 30px;" name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                        <label><input style=" width: 30px; height: 30px;" name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>
                    </div>
                </div>
                <div>
                    <label>VAI TRÒ:</label>
                    <div>
                        <label><input style="margin-left: 180px; width: 30px; height: 30px;" name="vai_tro" value="0" type="radio">Khách hàng</label>
                        <label><input style=" width: 30px; height: 30px;" name="vai_tro" value="1" type="radio" checked>Nhân viên</label>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <button name="btn_insert">Thêm mới</button>
                    <button type="reset">Nhập lại</button>
                    <a class="danhsach" href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>
