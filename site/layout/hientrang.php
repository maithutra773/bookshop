<!DOCTYPE html>
<html>
    <head>
        <style>
            .anhdai{
                width:15px;
                height:15px;
                border:1px;
                border-radius:100%;
                float:left;
            }
            .tenminh{
                font-size: 10px;
                margin-left: 25px;
            }
        </style>
    </head>
    <body>
        <div class="taikhoan123">
            <div> 
                <div>
                    <img class="anhdai" src='<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>'>
                    <p class="tenminh"><?= $_SESSION['user']['ho_ten']?></p>
                </div>
            </div>
        </div>        
    </body>
</html>
