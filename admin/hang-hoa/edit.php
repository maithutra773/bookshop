<!DOCTYPE html>
<head>
    <style>
          form{
            width: 900px;
            height: 870px;
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
                    <label>MÃ HÀNG HÓA</label>
                    <input name="ma_hh" style="margin-left: 41px;" class="thenhap" readonly value="<?=$ma_hh?>">
                </div>
                <div>
                    <label>TÊN HÀNG HÓA</label>
                    <input name="ten_hh" style="margin-left: 34px;" class="thenhap" value="<?=$ten_hh?>">
                </div>
                <div>
                    <label>ĐƠN GIÁ</label>
                    <input name="don_gia" style="margin-left: 86px;" class="thenhap" value="<?=$don_gia?>">
                </div>
            </div>
            <div>
                <div>
                    <label>GIẢM GIÁ</label>
                    <input name="giam_gia" style="margin-left: 78px;"  class="thenhap" value="<?=$giam_gia?>">
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input name="up_hinh" type="file">
                    <input name="hinh" type="hidden" value="<?=$hinh?>"> (<?=$hinh?>)
                </div>
                <div>
                    <label>LOẠI HÀNG</label>
                    <select name="ma_loai">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                if($loai['ma_loai'] == $ma_loai){
                                    echo '<option selected value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input name="dac_biet" value="0" type="radio" <?=$dac_biet?'':'checked'?>>Đặc biệt</label>
                        <label><input name="dac_biet" value="1" type="radio"<?=$dac_biet?'checked':''?>>Bình thường</label>
                    </div>
                </div>
                <div>
                    <label>NGÀY NHẬP</label>
                    <input name="ngay_nhap" style="margin-left: 72px;" class="thenhap" value="<?=$ngay_nhap?>">
                </div>
                <div>
                    <label>SỐ LƯỢC XEM</label>
                    <input name="so_luot_xem" style="margin-left: 57px;" readonly class="thenhap" value="0" value="<?=$so_luot_xem?>">
                </div>
            </div>
            <div>
                <div>
                    <label>MÔ TẢ</label>
                    <textarea name="mo_ta" rows="4"><?=$mo_ta?></textarea>
                </div>
                <div>
                    <button name="btn_update">Cập nhật</button>
                    <button type="reset">Nhập lại</button>
                    <a href="index.php">Thêm mới</a>
                    <a href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>
