<!DOCTYPE html>
<html>
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
        form  div{
            margin-top: 20px;
        }
        form  div label{
            margin-left: 80px;
        }
        form  div  button{
            margin-left: 60px;
            width: 120px;
            height: 30px;
            border:1px solid #000;
            border-radius: 5px;
        }
        form  div  button:hover{
            background: yellow;
        }
       
        form  div.mahang{
            margin-top: 30px;
            padding-bottom: 0px;
            padding-top: 23px;
        }
        form  div input.thenhap{
            width: 500px;
            height: 50px;
            border: 1px solid #000;
            border-radius: 10px ;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center;">QUẢN LÝ LOẠI HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 >$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post">
        <div  class="mahang">
            <label> Mã loại</label>
            <input name="ma_loai" style="margin-left: 60px;" class="thenhap" value="<?= $ma_loai ?>" readonly>
        </div>
        <div>
            <label>Tên loại</label>
            <input name="ten_loai" style="margin-left: 57px;" class="thenhap" value="<?= $ten_loai ?>">
        </div>
        <div>
            <button name="btn_update">Cập nhật</button>
            <button type="reset">Nhập lại</button>
            <button> <a href="index.php">Thêm mới</a> </button>
            <button> <a href="index.php?btn_list">Danh sách</a> </button>
        </div>
    </form>
</body>

</html>