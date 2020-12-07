<!DOCTYPE html>
<html>
    <head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .sanphamcungloai{
                list-style: none;
            }
            .sanphamcungloai a{
                text-decoration: none;
                color: #000;
            }
            .sanphamcungloai a:hover{
                color: yellow;

            }
            .panel-heading{

            }
        </style>

    </head>
    <body>
        <div class="panel panel-default">
            <div class="panel-heading w-40 h-12 p-2 text-base bg-blue-200 border-4 border-solid ">HÀNG CÙNG LOẠI</div>
            <div class="panel-body">
                <ul>
                    <?php
                    $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
                    foreach ($hh_cung_loai as $hh) {
                        echo "<li class='sanphamcungloai'><a href='chi-tiet.php?ma_hh=$hh[ma_hh]'>$hh[ten_hh]</a></li>";
                    }
                    ?>
                </ul>                
            </div>
        </div>
    </body>
</html>
