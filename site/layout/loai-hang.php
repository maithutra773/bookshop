<!DOCTYPE html>
        <html>
            <head>
                <style>
                    
                </style>
                <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            </head>
            <body>
                <div class="border m-2 p-2 " >
                    <div class=" ">
                            <div class="text-xl w-1/6 bg-red-100 m-auto p-2 font-bold text-center">DANH MỤC</div>

                            <div class=" grid grid-cols-4 gap-5 border m-4 p-4 text-center bg-red-100 ">
                                 <?php
                                    require '../../dao/loai.php';
                                         $loai_array = loai_select_all();
                                    foreach ($loai_array as $loai) {
                                         $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                                    echo "<a  href='$href'>$loai[ten_loai]</a> ";
                                     }
                                     if (isset($_POST['timkiem'])) {
                                      $loai_array = loai_select_all();
                                      foreach ($loai_array as $loai) {
                                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                                     echo "<a href='$href'>$loai[ten_loai]</a> ";
                                                            }
                                                        }
                                                    ?>
                                </div>                      

                    </div>
                   
                    <div>
                        <form class="mx-4" action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                            <input class="border bg-gray-100 w-2/6  " name="keywords" placeholder="Từ khóa tìm kiếm">
                            <button class="border" name="timkiem">Tìm Kiếm</button>
                        </form>                
                    </div>            
                </div>
            </body>
        </html> 



