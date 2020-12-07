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

        .one {
            margin-left: 390px;
            font-size: 20px;
            padding-right: 10px;
        }

        .two {
            width: 400px;
            border-radius: 30px;
        }

        .four {
            margin-left: 520px;
            margin-top: 5px;
            border-radius: 20px;
            background-color: #339966;
            color: white;
            border: 1px soild black;
        }

        .four:hover {
            color: black;
        }

        .fours {
            margin-top: 5px;
            border-radius: 20px;
            background-color: #339966;
            color: white;
            border: 1px soild black;
        }

        .fours:hover {

            color: black;
        }

        .fourss {
            margin-top: 5px;
            border-radius: 20px;
            background-color: #339966;
            color: white;
            border: 1px soild black;
        }

        .fourss a:hover {
            color: black;
            text-decoration: none;

        }

        a {
            color: white;
            text-decoration: none;
        }
        form{
            margin-top: 20px;
            font-family: tahoma;
            margin-left: -40px;
        }
    </style>
</head>

<body>
<h3 >QUẢN LÝ LOẠI HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    
    <form action="index.php" method="post">
        <div>
            <label class="one">Mã loại :</label>
            <input style="margin-left: 20px ; width: 400px; height: 30px;" name="ma_loai" value="auto number" readonly class="two">
        </div>

        <div style="margin-top: 5px;">
            <label class="one">Tên loại :</label>
            <input style="margin-left: 13px ; width: 400px; height: 30px;" name="ten_loai" class="two">
        </div>
        <div style="margin-top: 10px;">
            <button style="width: 150px; margin-left: 450px;" name="btn_insert" class="four">Thêm mới</button>
            <button style="width: 150px;" type="reset" class="fours">Nhập lại</button>
            <button style="width: 150px;" class="fourss"> <a href="index.php?btn_list">Danh sách</a> </button>
        </div>
    </form>
</body>

</html>