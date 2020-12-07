<!DOCTYPE html>
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
            height: 1100px;
            background: #85f81f;
            margin-left: 200px;
            border: 1px;
            border-radius: 10px;
            margin-top: 30px;
        }
        form div div{
            margin-top: 20px;
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
        form div div input.thenhap{
            width: 500px;
            height: 50px;
            border: 1px solid #000;
            border-radius: 10px ;
        }
        form div div textarea{
           width: 600px;
           height: 130px;
           margin-left: 100px;
           border: 1px solid #000;
           border-radius: 10px;
           margin-left: 250px;
        }

    </style>
</head>
<html>
    <body>
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div style=" padding-bottom: 0px;padding-top: 25px;" class="mahang">
                    <label>MÃ HÀNG HÓA:</label>
                    <input style="margin-left: 50px;" class="thenhap" name="ma_hh" readonly value="auto number">
                </div>
                <div>
                    <label>TÊN HÀNG HÓA:</label>
                    <input style="margin-left: 44px;" class="thenhap" name="ten_hh">
                </div>
                <div>
                    <label>ĐƠN GIÁ:</label>
                    <input style="margin-left: 97px;" class="thenhap" name="don_gia">
                </div>
            </div>
            <div>
                <div>
                    <label>GIẢM GIÁ:</label>
                    <input style="margin-left: 90px;" class="thenhap" placeholder="tính theo %" name="giam_gia">
                </div>
                <div>
                    <label>HÌNH ẢNH:</label>
                    <input  name="hinh" type="file">
                </div>
                <div>
                    <label>TÁC GIẢ</label>
                    <input  name="tac_gia" class="thenhap" style="margin-left: 90px;">
                </div>
                <div>
                    <label>NHÀ XUẤT BẢN :</label>
                    <input  name="nha_xb" class="thenhap" style="margin-left: 90px;" >
                </div>
                <div>
                    <label>NĂM XUẤT BẢN:</label>
                    <input  name="nam_xb" class="thenhap" style="margin-left: 90px;" >
                </div>
               
                <div>
                    <label>LOẠI HÀNG:</label>
                    <select style="width: 200px; height: 30px; margin-left: 80px;" name="ma_loai">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input style="margin-left: 180px; width: 30px; height: 30px;" name="dac_biet" value="0" type="radio">Đặc biệt</label>
                        <label><input style="width: 30px; height: 30px;" name="dac_biet" value="1" type="radio" checked>Bình thường</label>
                    </div>
                </div>
                <div>
                    <label>NGÀY NHẬP:</label>
                    <input style="margin-left: 72px;" class="thenhap" name="ngay_nhap">
                </div>
                <div>
                    <label>SỐ LƯỢC XEM:</label>
                    <input style="margin-left: 55px;" class="thenhap" name="so_luot_xem" readonly value="0">
                </div>
            </div>
            <div>
                <div>
                    <label>MÔ TẢ:</label> <br>
                    <textarea name="mo_ta" rows="4" ></textarea>
                </div>
                <div>
                    <button name="btn_insert">Thêm mới</button>
                    <button type="reset">Nhập lại</button>
                    <a class="danhsach" href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>
