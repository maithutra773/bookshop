<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quản trị website</title>
        <script src="<?=$CONTENT_URL?>/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <!-- <link rel="stylesheet" href="../../content/css.css"> -->
        <style>
            * {
    padding: 0;
    margin: 0;
}

body {
    background: #cdcdcd;

}

#container {
    width: 1120px;
}

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
        </style>
    </head>
    <body>
        <div id="container">
            <h1>QUẢN TRỊ WEBSITE</h1>
            <nav class="style">
                <?php require 'menu.php';?>
            </nav>
            <div class="tensp">
                <?php
                    require $VIEW_NAME;
                ?>
            </div>
        </div>
    </body>
</html>
