<!DOCTYPE html>
<html>
    <head>
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
            form table{
                margin-top: 50px;
                margin-left: 180px;
                width: 900px;
            }
        </style>
    </head>
    <body>
        <h3>TỔNG HỢP BÌNH LUẬN</h3>
        <form action="index.php" method="post">
            <table border="1">
                <thead>
                    <tr>
                        <th>HÀNG HÓA</th>
                        <th>SỐ BL</th>
                        <th>MỚI NHẤT</th>
                        <th>CŨ NHẤT</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <td><?=$ten_hh?></td>
                        <td><?=$so_luong?></td>
                        <td><?=$cu_nhat?></td>
                        <td><?=$moi_nhat?></td>
                        <td>
                            <a href="../binh-luan/index.php?ma_hh=<?=$ma_hh?>">Chi tiết</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </form>
    </body>
</html>
