<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
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
            ul {
                margin-left: 285px;
                border: #000;
                margin-top: 15px;
                padding: 20px;
                border-radius: 10px;
                width: 650px;
                background: #000;
                height: 20px;
                padding-right: 107px;
            }
            ul li {
                float: left;
                margin-left: 20px;
            }
            ul li a {
                padding: 10px 20px;
                padding-top: 35px;
                color: #fff;
            }
            form table{
                margin-top:50px ;
                margin-left: 220px;
                width: 900px;
                background: #26f9fb;
            }
            form table tfoot tr td button{
                margin-left: 50px;
                width: 150px;
                height: 30px;
                border:1px;
                border-radius: 5px;
            } 
            form table tfoot tr td button:hover{
                background: yellow;
            }
            form table tfoot tr td a.nhapthem {
                padding: 5px 15px;
                margin-left: 50px;
                height: 50px;
                border: 1px;
                border-radius: 5px;
                background: #fff;
                text-decoration: none;
            }
            form table tfoot tr td a.nhapthem:hover{
                background: yellow;

            }
            form table tbody tr td a.suaxoa{
                padding: 1px 3px; 
                border: 1px; 
                border-radius: 5px; 
                background: #fff; 
                text-decoration: none;
                color: #000;
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <ul class="pagination"> 
            <li class="page_item"><a href="?btn_list&page_no=1">Đầu</a></li>
            <li class="page_item"><a href="?btn_list&page_no=<?=$_SESSION['prev_page']?>">&lt;&lt;</a></li>
            <?php
            for($i =1; $i<=$_SESSION['total_page']; $i++)
            echo' <li class="page_item"><a href="?btn_list&page_no='.$i.'">'.$i.'</a></li>';
            ?>
            <li class="page_item"><a href="?btn_list&page_no=<?=$_SESSION['next_page']?>">&gt;&gt;</a></li>
            <li class="page_item"><a href="?btn_list&page_no=<?=$_SESSION['total_page']?>">Cuối</a></li>
        </ul>
        <form action="index.php" method="post">
            <table border="1">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ HH</th>
                        <th>TÊN HH</th>
                        <th>ĐƠN GIÁ</th>
                        <th>GIẢM GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_hh[]" value="<?=$ma_hh?>"></th>
                        <td><?=$ma_hh?></td>
                        <td><?=$ten_hh?></td>
                        <td>$<?=number_format($don_gia, 2)?></td>
                        <td><?=number_format($giam_gia*100)?>%</td>
                        <td><?=$so_luot_xem?></td>
                        <td>
                            <a class="suaxoa" href="index.php?btn_edit&ma_hh=<?=$ma_hh?>">Sửa</a>
                            <a class="suaxoa" href="index.php?btn_delete&ma_hh=<?=$ma_hh?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <button  id="check-all" type="button">Chọn tất cả</button>
                            <button id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                            <a class="nhapthem" href="index.php">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>
