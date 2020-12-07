<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            body{
                background: #27f7ab;
            }
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
            form {
                margin-left: 200px;
                text-align: center;
            }
            form table{
                width: 900px;
            }
            .khachhang{
                margin-top: 50px;
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
        <div class="khachhang">
            <form action="index.php" method="post">
                <table border="1">
                    <thead>
                        <tr>
                            <th></th>
                            <th>MÃ KH</th>
                            <th>HỌ VÀ TÊN</th>
                            <th>ĐỊA CHỈ EMAIL</th>
                            <th>HÌNH ẢNH</th>
                            <th>VAI TRÒ?</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($items as $item){
                            extract($item);
                    ?>
                        <tr>
                            <th><input type="checkbox" name="ma_kh[]" value="<?=$ma_kh?>"></th>
                            <td><?=$ma_kh?></td>
                            <td><?=$ho_ten?></td>
                            <td><?=$email?></td>
                            <td ><?php echo '<img style="width:100px;" src="'.$CONTENT_URL.'/images/products/'.$hinh.'" alt="">';?></td>
                            <td><?=$vai_tro?'Nhân viên':'Khách hàng'?></td>
                            <td>
                                <a href="index.php?btn_edit&ma_kh=<?=$ma_kh?>">Sửa</a>
                                <a href="index.php?btn_delete&ma_kh=<?=$ma_kh?>">Xóa</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <button id="check-all" type="button">Chọn tất cả</button>
                                <button id="clear-all" type="button">Bỏ chọn tất cả</button>
                                <button id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                                <a href="index.php">Nhập thêm</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </body>
</html>
