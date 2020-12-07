<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .footertrang{
            width: 95%;
            margin: auto;
            border: 1px;
            border-radius: 10px;
        }
    </style>
 </head>
    <div class="footerweb">
                    <?php
                        // require_once '../../dao/hang-hoa.php';
                        // $loai_array = loai_select_all();
                        // foreach ($loai_array as $loai) {
                        // $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                        //     echo "
                        //         <div>
                        //             <a  class='footeranh' href='$href'>$loai[ten_loai]</a> 
                        //         </div>
                        //         ";
                        // }
                    ?>
    </div>
    <div class="grid grid-cols-4 py-3 my-4 bg-white footertrang ">
        <div class="img">
            <img class="../content/logo1.png" src="logo">
        </div>
        <div class="p-4 mx-2 text-center text-black bg-gray-200 border ">
            <h1 class="my-2 text-xl italic font-bold leading-loose"> THÔNG TIN LIÊN HỆ </h1><hr>
            <h3 class="py-1"> Phone : 09888888888 </h3>
            <h3 class="py-1" > Email : bookshop@gmail.com </h3>
            <h3 class="py-1" > Fanpage : Book Shop </h3>
            <h3 class="py-1" > Website : Bookshop.com </h3>
        </div>
        <div class="p-4 mx-2 text-black bg-gray-200 border ">
            <h1 class="my-2 text-xl italic font-bold leading-loose "> CƠ SỞ TOÀN QUỐC </h1><hr>
            <h3 class="py-1"> Hà Nội </h3>
            <h3 class="py-1" > Cần Thơ </h3>
            <h3 class="py-1" > Thành Phố Hồ Chí Minh </h3>
            <h3 class="py-1" > Đà Nẵng </h3>
        </div>
        <div class="p-4 text-center text-black bg-gray-200 border ">
            <h1 class="my-2 text-xl italic font-bold leading-loose "> DANH SÁCH CHUNG </h1><hr>
            <h3 class="py-1" > Chính sách mua hàng </h3>
            <h3 class="py-1" > Ưu đãi khách hàng </h3>
            
        </div>
    </div>
</div>