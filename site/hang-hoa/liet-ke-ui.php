<!DOCTYPE html>
<html>
    <head>
        <style>
            #sanpham10{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                margin-top: 35px;
            }
            .anhsach{
                width: 200px;
                height: 250px;
            }
            .chiao{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
            }
            .seach{
    width: 100%;
    position: relative;
    padding-top: 1.5em;
}
    .seach >input{
        width: 90%;
        outline: none;
        border-radius: 10px;
        padding-left: 3px;
        height:2.5em;
        border: 1px solid #ff000063;
        padding-top: 20px;
    }
    .seach>button{
        position: absolute;
        top: 39%;
        right: 0.1%;
        padding: 2.9px 20px;
        font-size: 30px;
        border-radius: 10px;
        border: none;
        border-right:  #ff000063;
        outline: none;
        background: #ccced1;
        left: 270px;

    }
        </style>
    </head>
    <body>
        <div id="sanpham10">
        <?php
            foreach ($items as $item) {
                extract($item);
        ?>
            <div>
                <div class="anh">
                    <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <img class="anhsach" src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>">
                    </a>
                    <div>
                    <div class="chiao">
                        <p style="color: red; margin-top: 5px; "><strike> $<?=number_format($item['don_gia'])?></strike></p>
                        <p style="color: red; margin-top: 5px;"><b> $<?=number_format($item['giam_gia'])?> </b></p>
                    </div>
                        <h3 style="color: #000; width:90%"><?=$ten_hh?></h3>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </body>
</html>
