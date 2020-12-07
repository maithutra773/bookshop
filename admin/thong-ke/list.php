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
                width: 1135px;
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
                width: 1135px;
                background: rgb(13, 192, 28);
                height: 30px;
            }
             table{
                margin-top: 50px;
                margin-left: 200px;
                width: 900px;
            }
            div.xembieudo{
                margin-top: 30px;
            }
            a.bieudo{
                padding: 10px 50px;
                margin-left: 230px;
                text-decoration: none;
                width: 300px;
                height: 30px;
                border: 1px;
                border-radius: 10px;
                background: #fff;
                color: #000;
            }
            a.bieudo:hover{
                background: yellow;
            }
        </style>
    </head>
    <body>
        <h3>THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($items as $item){
                    extract($item);
            ?>
                <tr>
                    <td><?=$ten_loai?></td>
                    <td><?=$so_luong?></td>
                    <td>$<?=number_format($gia_min,2)?></td>
                    <td>$<?=number_format($gia_max,2)?></td>
                    <td>$<?=number_format($gia_avg,2)?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <div class="xembieudo">
            <a  class="bieudo" href="index.php?chart">Xem biểu đồ</a>
        </div>
    </body>
</html>
