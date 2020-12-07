<!DOCTYPE html>
<html>
    <head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            /* .panel-heading{
                margin-top: 10px;
            }
            .form-control{
                width: 300px;
                height: 40px;
                border: 1px solid #000;
                border-radius: 10px;
            }
            .form-control:hover{
                background: yellow;
            }
            .row{
                display: grid;
                grid-template-columns: 1fr 2fr 3fr;
            } */
            
        </style>
    </head>
    <body>
        <div class="panel panel-default ">
            <div class="w-32 h-12 p-2 text-base bg-blue-200 border-4 border-solid ">
               BÌNH LUẬN 
            </div>
            <div class="px-2 py-2 mx-6 my-2 border panel-body border-solid-black">
                <?php
                    require '../../dao/binh-luan.php';
                    if(exist_param("noi_dung")){
                        $ma_kh = $_SESSION['user']['ma_kh'];
                        $ngay_bl = date_format(date_create(), 'Y-m-d');
                        binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
                    }
                    $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
                    foreach ($binh_luan_list as $bl) {
                        echo "<li>$bl[noi_dung] <i class='pull-right'><b>$bl[ma_kh]</b>, $bl[ngay_bl]</i></li>";
                    }
                ?>
            </div>
            <div class="panel-footer">
                    <?php
                        if(!isset($_SESSION['user'])){
                        
                        // echo '  <li><a href="../tai-khoan/dang-nhap.php"><b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b></a> </li>';
                        }else{
                    ?>
                <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
                    <div class="form-group">
                        <div class="grid grid-cols-3 px-4 ">
                            <div class="">
                                <input name="noi_dung" placeholder="Nhập bình luận vào đây" class="bg-gray-100 form-control " >
                            </div>
                            <div class="ml-4 ">
                                <button id="btn-default"  class="w-20 text-white bg-red-500 border btn btn-default " >Gửi</button>
                            </div>
                        </div>
                    </div>
                </form>                
            <?php }?>
            </div>
        </div>        
    </body>
</html>