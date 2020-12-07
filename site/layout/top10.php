<!DOCTYPE html>
<html>
    <head>
        <style>
           
        </style>
    </head>
    <body>
        <div>
            <div >TOP 10 YÊU THÍCH</div>
            <div>
                <?php
                    require_once '../../dao/hang-hoa.php';
                        $hh_array = hang_hoa_select_top10();
                        foreach ($hh_array as $hh) {
                            $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                            echo "
                                <div>
                                    <div><img style='width: 20px; height: 30px; float: left;' src='$CONTENT_URL/images/products/$hh[hinh]'></div>
                                    <div><a href='$href'>$hh[ten_hh]</a></div> </br>
                                </div>
                            ";
                        }
                ?>
            </div>
        </div>
    </body>
</html>
