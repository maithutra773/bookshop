<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title></title>
    <script src="<?= $CONTENT_URL ?>/js/xshop-list.js"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body{
            background: #cdcdcd;
        }
        h1 {
            padding: 28px;
            margin-left: 20px;
            border: rgb(218, 95, 115);
            margin-top: 10px;
            border-radius: 10px;
            width: 1120px;
            color: #fff;
            height: 178px;
            background: rgb(218, 95, 115);
        }
        nav {
            margin-left: 17px;
            border: #000;
            margin-top: 15px;
            padding: 20px;
            border-radius: 10px;
            width: 1125px;
            background: #000;
            height: 65px;
            text-align: center;
        }
        div.tensp h3 {
            margin-left: 16px;
            border: rgb(13, 192, 28);
            margin-top: 15px;
            padding: 10px 20px;
            border-radius: 10px;
            width: 1125px;
            background: rgb(13, 192, 28);
            height: 58px;
        }
        form{
            margin-top: 10px;
            margin-left: 24px;
        }
        button{
            border: 2px;
            border-radius: 5px;
            margin-left: 10px;
        }
        button:hover{
            background: #000;
            color: #fff;
        }
        button a{
            text-decoration: none;
            color: #000;
        }
         button a:hover{
            text-decoration: underline;
            color: #fff;
        }
        .formloai form table{
            width: 1100px;
        }
    </style>
</head>

<body>
    <div class="tieude">
        <h3 style="text-align: center;">QUẢN LÝ LOẠI HÀNG</h3>
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 >$MESSAGE</h5>";
    }
    ?>
    <div class="formloai">
        <form action="index.php" method="post">
            <table class="table table-bordered table-dark" ; border="1">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">MÃ LOẠI</th>
                        <th scope="col">TÊN LOẠI</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th scope="row"><input type="checkbox" name="ma_loai[]" value="<?= $ma_loai ?>"></th>
                            <td><?= $ma_loai ?></td>
                            <td><?= $ten_loai ?></td>
                            <td>
                                <a href="index.php?btn_edit&ma_loai=<?= $ma_loai ?>">Sửa</a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="index.php?btn_delete&ma_loai=<?= $ma_loai ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button id="check-all" type="button">Chọn tất cả</button>
                            <button id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                            <button> <a href="index.php">Nhập thêm</a> </button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</body>



</html>